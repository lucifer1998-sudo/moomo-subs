<?php

namespace App\Models;

use App\Models\MusicIndexVideos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MusicIndex extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'music_index';

    public function videos(){
        return $this->hasManyThrough(Videos::class,MusicIndexVideos::class,'music_index_id','id','id','video_id');
    }
}
