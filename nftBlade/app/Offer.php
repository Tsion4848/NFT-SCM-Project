<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Offer extends Model
{
    protected $fillable = ['card_number', 'price', 'image_id'];

    public function image() {
        return $this->belongsTo(Image::class);
    }
}
