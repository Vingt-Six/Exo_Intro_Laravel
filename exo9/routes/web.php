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

Route::get('/SAV', function() {
    return view('infos.contact.sav');
});

Route::get('/Partenariat', function() {
    return view('infos.contact.partenariat');
});

Route::get('/Info', function() {
    return view('infos.contact.info');
});

Route::get('/Frontend', function() {
    $frontTabs = ["nom" => "Amar Di", "fonction" => "pro React"];
    return view('team.web.dev.frontend');
});

Route::get('/Backend', function() {
    return view('team.web.dev.backend');
});