<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function showNumber()
    {
    $dara  = '012312546';
    return view('showNumber',['Number' => $dara]);
    }
}
