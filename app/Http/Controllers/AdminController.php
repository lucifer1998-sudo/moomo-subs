<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Albums;
use App\Models\Videos;
use App\Models\AlbumVideos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        return view('admin.index');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function addRequest(){
        return view('admin.add-request');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function addVideos(){
        return view('admin.add-videos');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function addAlbums(){
        $videos = Videos ::all();
        return view ('admin.add-albums',compact('videos'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function saveAddRequest(Request $request){
        \App\Models\Request ::create([
            'title' => $request -> title,
            'link'  => $request -> link,
            'sub_status' => $request -> sub
        ]);
        return redirect() -> back() -> with('success' , 'Request Succesfully Added');
    }
    public function saveVideos(Request $request){
        Videos::create([
            'title' => $request -> title,
            'link'  => $request -> link
        ]);
        return redirect()->back()->with('success','Video Successfully Added');
    }
    public function saveAlbums(Request $request){
        $file = $request -> image;
        $file_name=mt_rand(0,1000).$file->getClientOriginalName();
        if (!is_dir(public_path().'\uploads')){
            mkdir(public_path().'\uploads', 0755, true);
        }
        $file->move(public_path().'\uploads', $file_name);
        $album = Albums::create([
            'title' => $request -> title,
            'image' => $file_name
        ]);
        
        if (isset($request->videos) && count($request->videos) > 0){
            foreach ($request->videos as $key => $video){
                AlbumVideos::create([
                    'video_id'  => $video,
                    'album_id'  => $album -> id
                ]);
            }
        }
        return redirect()->back()->with('success','Video Successfully Added');
    }
}