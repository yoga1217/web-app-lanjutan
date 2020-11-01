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
    return view ('welcome');
});

Route::get('/about-me', function () {
    return ('Nama Saya <b>Yoga Ramadhan</b>');
});

Route::get('/nim', function () {
    return ('NIM <b>1811102441101</b>');
});

Route::get('/ayam', function () {
    return ('Ayam <b>KFC</b> Itu Enak');
});

Route::get('/hari', function () {
    return ('1 Minggu <b>Ada</b> 7 Hari');
});

Route::get('/kuliah', function () {
    return ('Kuliah <b>Online</b> Itu Indah');
});

use App\Http\Controllers\ControllerSatu;
use App\Http\Controllers\ControllerDua;

Route::get("/percobaan1",[ControllerSatu::class,"percobaan1"]);
Route::get("/percobaan2",[ControllerSatu::class,"percobaan2"]);
Route::get("/percobaan3",[ControllerSatu::class,"percobaan3"]);

Route::get("/cobacoba1",[ControllerDua::class,"cobacoba1"]);
Route::get("/cobacoba2",[ControllerDua::class,"cobacoba2"]);
Route::get("/cobacoba3",[ControllerDua::class,"cobacoba3"]);