<?php

namespace App\Models;

use App\Models\Albums;
use App\Models\Videos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlbumVideos extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function album(){
        return $this -> hasOne(Albums::class,'id','album_id');
    }
    public function videos(){
        return $this -> hasMany(Videos::class,'id','video_id');
    }
}
