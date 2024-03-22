<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AppointController;
require __DIR__.'/auth.php';

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/regular', [AppointController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/newpatients', [CustomerController::class, 'index'])->middleware(['auth']);
Route::post('/addpatient', [CustomerController::class, 'store']);

Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);
Route::get('/', [DoctorController::class, 'index']);
Route::get('/new', function (){return view('new');});
Route::post('/appoint', [AppointController::class, 'store']);
Route::get('/new-patient/{id}', [DoctorController::class, 'newpp']);
Route::post('/new-doc', [DoctorController::class, 'store']);
Route::get('/register1/{id}', [DoctorController::class, 'show']);