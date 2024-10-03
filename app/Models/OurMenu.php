<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class OurMenu extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    protected $table='our_menus';

    protected $appends=['image_url'];

    public function getImageUrlAttribute(){
        return $this->image_path ? Storage::url($this->image_path) : null;
    }
}
