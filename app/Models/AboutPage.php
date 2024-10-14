<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AboutPage extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=['hero_bg_image_url','image_url','atmosphere_bg_image_url','about_images_url','recommendated_by_images_url','celebrate_images_url'];


    public function getHeroBgImageUrlAttribute()
    {
        return $this->hero_bg_image ? Storage::url($this->hero_bg_image) : null;
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }

    public function getAtmosphereBgImageUrlAttribute()
    {
        return $this->atmosphere_bg_image ? Storage::url($this->atmosphere_bg_image) : null;
    }

    public function getAboutImagesUrlAttribute()
    {
        $about_images = json_decode($this->about_images, true);
        return array_map(function($image){
            return Storage::url($image);
        },$about_images);
    }

    public function getRecommendatedByImagesUrlAttribute()
    {
        $recommendated_by_images = json_decode($this->recommendated_by_images, true);
        return array_map(function($image){
            return Storage::url($image);
        },$recommendated_by_images);
    }

    public function getCelebrateImagesUrlAttribute()
    {
        $celebrate_images = json_decode($this->celebrate_images, true);
        return array_map(function($image){
            return Storage::url($image);
        },$celebrate_images);
    }


}
