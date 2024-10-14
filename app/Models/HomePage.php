<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomePage extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=['hero_bg_video_url','concept_image_url','connect_bg_image_url','celebrate_images_url'];

    protected $casts=[
        'celebrate_images'=>'array'
    ];

    public function getHeroBgVideoUrlAttribute()
    {
        return $this->hero_bg_video ? Storage::url($this->hero_bg_video) : null;
    }

    public function getConceptImageUrlAttribute()
    {
        return $this->concept_image ? Storage::url($this->concept_image) : null;
    }

    public function getConnectBgImageUrlAttribute()
    {
        return $this->connect_bg_image ? Storage::url($this->connect_bg_image) : null;
    }

    public function getcelebrateImagesUrlAttribute()
    {
        // convert celebrate_images to an array

        $celebrate_images = json_decode($this->celebrate_images, true);
        return array_map(function($image){
            return Storage::url($image);
        },$this->celebrate_images);
    }


}
