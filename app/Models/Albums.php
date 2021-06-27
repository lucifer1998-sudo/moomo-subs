<?php

namespace App\Models;

use App\Models\Videos;
use App\Models\AlbumVideos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Albums extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function videos(){
        return $this->hasManyThrough(Videos::class,AlbumVideos::class,'album_id','id','id','video_id');
    }
}
