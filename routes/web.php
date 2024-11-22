<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\PicturesController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\ProfileController;





use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/header', function () {
    return view('Header');
});

// Route::get('/Rock', function () {
//     return view('Rock');
// });

Route::get('/Page', function () {
    return view('Page');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/new-invoice', [InvoiceController::class, 'Newuser']);
Route::get('/risk', [RiskController::class, 'showRisk']);
Route::get('/number', [NumberController::class, 'showNumber']);
Route::get('/Pictures', [PicturesController::class, 'showPictures']);
Route::get('/place', [PlaceController::class, 'getLocation']);
Route::get('/userdata', [UserDataController::class, 'userData']);

Route::get('/rock', [ProfileController::class, 'create']);
Route::post('/myrock', [ProfileController::class, 'store']);

