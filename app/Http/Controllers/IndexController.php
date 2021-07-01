<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

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

    public function requestIndex(){
        $requests = RequestModel::where('requested_by',auth()->id()) -> get();
        return view('request.index',compact('requests'));
    } 
    public function addRequest(){
        return view ('request.add');
    }
    public function saveAddRequest(Request $request){
        RequestModel ::create([
            'title' => $request -> title,
            'link'  => $request -> link,
            'sub_status' => 'no',
            'requested_by' => auth()->id()
        ]);
        return redirect() -> route('request.index') -> with('success' , 'Request Succesfully Added');
    }
}
