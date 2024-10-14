<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends=['logo_main_url','logo_footer_url','lets_meat_logo_url'];

    public function getLogoMainUrlAttribute()
    {
        return $this->logo_main ? Storage::url($this->logo_main) : null;
    }

    public function getLogoFooterUrlAttribute()
    {
        return $this->logo_footer ? Storage::url($this->logo_footer) : null;
    }

    public function getLetsMeatLogoUrlAttribute()
    {
        return $this->lets_meat_logo ? Storage::url($this->lets_meat_logo) : null;
    }


}
