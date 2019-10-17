<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    function getFreeSong(){
        $listFreeSong = Song::all();
        return $listFreeSong;
    }
    function uploadFreeSong(Request $request){
        $song = new Song($request->all());
        $song->save();
        return $song;
    }
}
