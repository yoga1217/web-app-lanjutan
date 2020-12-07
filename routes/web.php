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

use App\Http\Controllers\UtamaController;

Route::get('/', function () {
    return view ('welcome');
});

Route::get('home', function () {
    return view('main');
});

Route::get("/tema/bootstrap",[UtamaController::class,"index"]);

Route::get('/about', [UtamaController::class,"about"]);
Route::get('/home', [UtamaController::class,"home"]);
Route::get('/beritaolahraga', [UtamaController::class,"beritaolahraga"]);
Route::get('/beritapolitik', [UtamaController::class,"beritapolitik"]);
Route::get('/datadiri', [UtamaController::class,"datadiri"]);

Route::post('/proses', [UtamaController::class,"proses"]);
Route::post('/input', [UtamaController::class,"input"]);