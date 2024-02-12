namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadInfo(Request $request)
    {
        try {
            // Validate the uploaded image
            $request->validate([
                'image' => 'required|file|mimes:jpg,jpeg,svg|max:2048', // Restrict image type and size
            ], [
                'image.mimes' => 'The image must be in JPEG or SVG format.',
                'image.max' => 'The image size must not exceed 2MB.',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            // Store the image using a dedicated file storage system (e.g., Amazon S3)
            Storage::disk('public')->putFileAs('images', $request->file('image'), $imageName);

            $image = new Image();
            $image->name = $request->name;
            $image->description = $request->description;
            $image->photographer = $request->photographer;
            $image->price = $request->price;
            $image->duration = $request->duration;
            $image->path = $imageName;
            $image->save();

            return back()->with('success', 'Image uploaded successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Image upload failed: ' . $e->getMessage());
        }
    }

    public function displayInfo()
    {
        $images = Image::paginate(10); // Display 10 images per page

        return view('explore', ['images' => $images]);
    }

    public function specificInfo($id)
    {
        try {
            $image = Image::findOrFail($id);

            $duration = $image->duration;

            $expiration_date = date('Y-m-d H:i:s', strtotime($duration));
            $expiration_timestamp = strtotime($expiration_date);

            return view('details', [
                'image' => $image,
                'expiration_timestamp' => $expiration_timestamp,
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Image not found: ' . $e->getMessage());
        }
    }
}