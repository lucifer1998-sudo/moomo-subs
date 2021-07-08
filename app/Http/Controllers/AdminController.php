<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Albums;
use App\Models\Videos;
use App\Models\MusicIndex;
use App\Models\AlbumVideos;
use Illuminate\Http\Request;
use App\Models\MusicIndexVideos;
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
        $requests = RequestModel::orderBy('id','desc')->get();
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
        return redirect('/') -> with('success' , 'Request Succesfully Added');
    }
    public function saveVideos(Request $request){
        Videos::create([
            'title' => $request -> title,
            'link'  => $request -> link,
            'gd' => $request -> gd ?? 'N/A',
            'yt' => $request -> yt ?? 'N/A',
            'dm' => $request -> dm ?? 'N/A',
            'other_1' => $request -> other_1 ?? 'N/A',
            'other_2' => $request -> other_2 ?? 'N/A'
        ]);
        return redirect()->route('admin.videos.index')->with('success','Video Successfully Added');
    }
    public function saveAlbums(Request $request){
        $file = $request -> image;
        $file_name=mt_rand(0,1000) . '-'.$file->getClientOriginalName();
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
    public function editRequest($id){
        $request = RequestModel::find($id);
        return view('admin.edit-request',compact('request'));
    }
    public function updateRequest(Request $request , $id){
        $req = RequestModel::find($id);
        $a = $req -> update([
            'title' => $request -> title,
            'link'  => $request -> link,
            'sub_status' => $request -> sub
        ]);
        return redirect() -> route('admin.request.index') -> with('success' , 'Request Succesfully Updated');
    }
    public function musicIndex(){
        $musicIndexes = MusicIndex::all();
        return view('admin.music-index',compact('musicIndexes'));
    }
    public function musicIndexCreate(){
        $videos = Videos::all();
        return view('admin.add-music-index',compact('videos'));
    }
    public function musicIndexStore(Request $request){
        $music_index = MusicIndex::create([
            'year' => $request -> year,
        ]);
        
        if (isset($request->videos) && count($request->videos) > 0){
            foreach ($request->videos as $key => $video){
                MusicIndexVideos::create([
                    'video_id'  => $video,
                    'music_index_id'  => $music_index -> id
                ]);
            }
        }
        return redirect()->route('admin.music-index')-> with('success' , 'Music Index Successfully Added');
    }
    public function musicIndexDetails($id){
        $music_index = MusicIndex::find($id);
        return view('admin.music-index-detail',compact('music_index'));
    }
}