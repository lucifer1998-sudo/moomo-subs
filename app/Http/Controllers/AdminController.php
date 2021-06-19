<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function addRequest(){
        return view('admin.add-request');
    }
    public function addVideos(){
        return view('admin.add-videos');
    }
    public function addAlbums(){
        return view ('admin.add-albums');
    }
    public function saveAddRequest( Request $request){
        dd($request -> all());
    }
}
