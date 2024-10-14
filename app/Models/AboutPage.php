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

    protected $casts=[
        'about_images'=>'array',
        'recommendated_by_images'=>'array',
        'celebrate_images'=>'array',
    ];

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
        return array_map(function($image){
            return Storage::url($image);
        },$this->about_images);
    }

    public function getRecommendatedByImagesUrlAttribute()
    {
        return array_map(function($image){
            return Storage::url($image);
        },$this->recommendated_by_images);
    }

    public function getCelebrateImagesUrlAttribute()
    {
        return array_map(function($image){
            return Storage::url($image);
        },$this->celebrate_images);
    }

    
}
