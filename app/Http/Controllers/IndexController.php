<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function albums(){
        $albums = Albums::all();
        return view('albums.index',compact('albums'));
    }

    public function albumVideos($id){
        $album = Albums::find($id);
        return view ('albums.videos',compact('album'));
    }
}
