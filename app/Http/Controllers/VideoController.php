<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function v1(){
        return view('video.v1');
    }
    public function v2(){
        return view('video.v2');
    }
    public function v71(){
        return view('video.v71');
    }
}
