<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Albums;
use App\Models\Videos;
use App\Models\AlbumVideos;
use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        return view('admin.index');
    }

    public function requestsListing(){
        $requests = RequestModel::all();
        return view ('admin.request-index',compact('requests'));
    }

    public function videosListing(){
        $videos = Videos::all();
        return view('admin.videos-index',compact('videos'));
    }
    
    public function albumsListing(){
        $albums = Albums::all();
        return view('admin.albums-index',compact('albums'));
    }

    public function albumDetails($id){
        $album=Albums::find($id);
        return view('admin.album-videos',compact('album'));
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
        return redirect() -> route('admin.request.index') -> with('success' , 'Request Succesfully Added');
    }
    public function saveVideos(Request $request){
        Videos::create([
            'title' => $request -> title,
            'link'  => $request -> link
        ]);
        return redirect()->route('admin.videos.index')->with('success','Video Successfully Added');
    }
    public function saveAlbums(Request $request){
        $file = $request -> image;
        $file_name=$file->getClientOriginalName().mt_rand(0,1000);
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
        return redirect()->route('admin.albums.index')->with('success','Video Successfully Added');
    }
    public function deleteAlbumVideo($album_id,$video_id){
        AlbumVideos::where(['video_id' => $video_id , 'album_id' => $album_id])->delete();
        return redirect()->back();
    }
    public function deleteVideo($id){
        Videos::find($id)->delete();
        return redirect()->back();
    }
    public function deleteRequest($id){
        RequestModel::find($id)->delete();
        return redirect()->back();
    }
}