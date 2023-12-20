<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'photographer', 'price', 'duration', 'path'];

    public function offers() {
        return $this->hasMany(Offer::class);
    }
}