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

//get paths only here
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



//reaching to the new page
Route::get('/vita1/new',function(){return view('vita1.vita');});
Route::get('/vita2/new',function(){return view('vita1.vita');});
Route::get('/vita3/new',function(){return view('vita1.vita');});
Route::get('/vita4/new',function(){return view('vita1.vita');});
Route::get('/vita5/new',function(){return view('vita1.vita');});
Route::get('/vita6/new',function(){return view('vita1.vita');});
Route::get('/vita7/new',function(){return view('vita1.vita');});
Route::get('/vita8/new',function(){return view('vita1.vita');});
Route::get('/vita9/new',function(){return view('vita1.vita');});
Route::get('/vita10/new',function(){return view('vita1.vita');});
Route::get('/vita11/new',function(){return view('vita1.vita');});
Route::get('/vita12/new',function(){return view('vita1.vita');});
Route::get('/vita13/new',function(){return view('vita1.vita');});
Route::get('/vita14/new',function(){return view('vita1.vita');});
Route::get('/vita15/new',function(){return view('vita1.vita');});


//sending new records
Route::post('/vita1/add',[Vita1Controller::class, 'store']);
Route::post('/vita2/add',[Vita2Controller::class, 'store']);
Route::post('/vita3/add',[Vita3Controller::class, 'store']);
Route::post('/vita4/add',[Vita4Controller::class, 'store']);
Route::post('/vita5/add',[Vita5Controller::class, 'store']);
Route::post('/vita6/add',[Vita6Controller::class, 'store']);
Route::post('/vita7/add',[Vita7Controller::class, 'store']);
Route::post('/vita8/add',[Vita8Controller::class, 'store']);
Route::post('/vita9/add',[Vita9Controller::class, 'store']);
Route::post('/vita10/add',[Vita10Controller::class, 'store']);
Route::post('/vita11/add',[Vita11Controller::class, 'store']);
Route::post('/vita12/add',[Vita12Controller::class, 'store']);
Route::post('/vita13/add',[Vita13Controller::class, 'store']);
Route::post('/vita14/add',[Vita14Controller::class, 'store']);
Route::post('/vita15/add',[Vita15Controller::class, 'store']);