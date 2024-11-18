<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

class AppController extends Controller
{
    public function strand()
    {}

    static function stranded()
    {}

}
$app = new AppController();
$app->strand();
AppController::stranded();

