<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vita1Controller;
use App\Http\Controllers\Vita2Controller;
use App\Http\Controllers\Vita3Controller;
use App\Http\Controllers\Vita4Controller;
use App\Http\Controllers\Vita5Controller;
use App\Http\Controllers\Vita6Controller;
use App\Http\Controllers\Vita7Controller;
use App\Http\Controllers\Vita8Controller;
use App\Http\Controllers\Vita9Controller;
use App\Http\Controllers\Vita10Controller;
use App\Http\Controllers\Vita11Controller;
use App\Http\Controllers\Vita12Controller;
use App\Http\Controllers\Vita13Controller;
use App\Http\Controllers\Vita14Controller;
use App\Http\Controllers\Vita15Controller;

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
    return view('home');
});

Route::get('/vita1',[Vita1Controller::class, 'index']);
Route::get('/vita2',[Vita2Controller::class, 'index']);
Route::get('/vita3',[Vita3Controller::class, 'index']);
Route::get('/vita4',[Vita4Controller::class, 'index']);
Route::get('/vita5',[Vita5Controller::class, 'index']);
Route::get('/vita6',[Vita6Controller::class, 'index']);
Route::get('/vita7',[Vita7Controller::class, 'index']);
Route::get('/vita8',[Vita8Controller::class, 'index']);
Route::get('/vita9',[Vita9Controller::class, 'index']);
Route::get('/vita10',[Vita10Controller::class, 'index']);
Route::get('/vita11',[Vita11Controller::class, 'index']);
Route::get('/vita12',[Vita12Controller::class, 'index']);
Route::get('/vita13',[Vita13Controller::class, 'index']);
Route::get('/vita14',[Vita14Controller::class, 'index']);
Route::get('/vita15',[Vita15Controller::class, 'index']);