<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(){

        $videos = Video::all();

        return view('welcome', ['videos' => $videos]);
    }
}
