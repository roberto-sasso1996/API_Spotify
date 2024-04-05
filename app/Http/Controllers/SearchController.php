<?php

namespace App\Http\Controllers;

use Spotify;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $searched = Spotify::searchItems($request->all()['search'] , 'album, artist, track')->get();
       return view('searched' ,['searched' => $searched]);
    }
}
