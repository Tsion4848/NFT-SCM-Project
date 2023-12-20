<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadInfo(Request $request)
{
    // Validate the uploaded image
    $request->validate([
        'image' => 'required|file|mimes:jpg,jpeg,svg|max:2048', // Restrict image type and size
    ], [
        'image.mimes' => 'The image must be in JPEG or SVG format.',
        'image.max' => 'The image size must not exceed 2MB.',
    ]);

    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $image = new Image();
    $image->name = $request->name;
    $image->description = $request->description;
    $image->photographer = $request->photographer;
    $image->price = $request->price;
    $image->duration = $request->duration;
    $image->path = $imageName;
    $image->save();

    return back()->with('success', 'Image is uploaded successfully.');
    
}

    public function displayInfo()
    {
        $images = Image::all();
        return view('explore', ['images' => $images]);
    }

    public function specificInfo($id)
    {
        $image = Image::findOrFail($id);

        $duration = $image->duration;

        $expiration_date = date('Y-m-d H:i:s', strtotime($duration));
        $expiration_timestamp = strtotime($expiration_date);

        return view('details', [
            'image' => $image,
            'expiration_timestamp' => $expiration_timestamp,
        ]);
    }

//     public function duration($id) {
    //         $image = Image::find($id);

//         $created_on = $image->created_on;

//         $expiration_date = date('Y-m-d H:i:s', strtotime($created_on.'+ 5 days'));
    //         $expiration_timestamp = strtotime($expiration_date);

//         return View('image.show', [
    //             'image' => $image,
    //             'expiration_timestamp' => $expiration_timestamp,
    //         ]);
    //     }
}
