<?php

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
    return view('welcome');
});

Route::get('/user', function(){
    return 'Bonjour chers utilisateurs';
});

Route::get('/vars', function(){
    $exo1 = "Bienvenue sur mon site";
    return $exo1;
});

Route::get('/normal', function(){
    $exo1bis = "tout le monde";
    return "Hello " . $exo1bis;
});