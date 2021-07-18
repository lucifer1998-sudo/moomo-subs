<?php

namespace App\Models;

use App\Models\SeriesVideos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Series extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function videos(){
        return $this->hasManyThrough(Videos::class,SeriesVideos::class,'series_id','id','id','video_id');
    }
}
