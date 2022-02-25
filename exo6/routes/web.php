<?php

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $fruits = [
        "pomme",
        "orange",
        "pasteque",
        "melon",
        "rhubarbe"
    ];
    return view('welcome', compact('fruits'));
});

Route::get('/dateDuJour', function() {
    date_default_timezone_set('Europe/Amsterdam');
    $laDate = date('d-m-y');
    $hrs = date('H:i:s');
    return view('date', compact('laDate', 'hrs'));
});