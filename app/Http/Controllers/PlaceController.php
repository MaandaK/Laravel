<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    //
    public function getLocation()
    {
        $dara  = 'South Africa';
        return view('Location',['location' => $dara]);
    }
}
