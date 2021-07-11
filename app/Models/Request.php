<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $guarded = [];
    protected $appends = ['image'];  

    public function user(){
        return $this ->belongsTo(User::class,'requested_by');
    }

    public function getImageAttribute(){
        $link = $this -> yt;
        $video_id = explode("?v=", $link);
        $video_id = $video_id[1];
        return "http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
    }
}
