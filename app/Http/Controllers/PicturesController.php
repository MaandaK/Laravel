<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicturesController extends Controller
{
    public function showPictures()
    {
        $dara  = 'no image data available';
        return view('Show_Pictures',['Pictures' => $dara]);
    }
}
