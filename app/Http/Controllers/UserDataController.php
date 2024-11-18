<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function userData()
    {
    $dara  = 'low risk';
    return view('UserData',['UserData' => $dara]);
    }
}
