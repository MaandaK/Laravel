<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function showRisk()
    {
    $dara  = 'low risk';
    return view('risk',['risk' => $dara]);
    }
}
