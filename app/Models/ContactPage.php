<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ContactPage extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=['hero_bg_image_url'];

    public function getHeroBgImageUrlAttribute()
    {
        return $this->hero_bg_image ? Storage::url($this->hero_bg_image) : null;
    }

}
