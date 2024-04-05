<?php

namespace App\Http\Controllers;

use Spotify;

class PublicController extends Controller
{
    public function home(){
        $topAlbum = Spotify::albums('1ATL5GLyefJaxhQzSPVrLX, 4JAvwK4APPArjIsOdGoJXX, 3WFTGIO6E3Xh4paEOBY9OU , 7txGsnDSqVMoRl6RQ9XyZP , 1bwbZJ6khPJyVpOaqgKsoZ , 6Per97deaWqrJlKQNX8RGK , 4OEhFBWot75bQO4s9K2gGk , 4eLPsYPBmXABThSJ821sqY , 5dwAak7S2zKsJ8QQoCPhrf , 71HM1CMYWeZzws8pyiEn46')->get();
        //dd($topAlbum['albums']);
        return view('welcome' , ['topAlbum' => $topAlbum['albums']]);
    }

    public function album($id){
        $album = Spotify::album($id)->get();
        //dd($album);
        return view('album', ['album' => $album]);
    }

}
