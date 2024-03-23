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

Route::get('/dashboard', [AppointController::class, 'index'])->middleware(['auth']);
Route::get('/regular', [AppointController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/newpatients', [CustomerController::class, 'index'])->middleware(['auth']);
Route::post('/addpatient', [CustomerController::class, 'store']);
Route::get('/regular-edit/{id}', [AppointController::class, 'seeUpdate'])->middleware(['auth']);
Route::get('/new-edit/{id}', [CustomerController::class, 'seeUpdate'])->middleware(['auth']);
Route::post('/update/new/{id}', [CustomerController::class, 'update'])->middleware(['auth']);
Route::post('/update/regular/{id}', [AppointController::class, 'update'])->middleware(['auth']);

Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);
Route::get('/', [DoctorController::class, 'index']);
Route::get('/new', function (){return view('new');})->middleware(['auth']);
Route::post('/appoint', [AppointController::class, 'store']);
Route::get('/new-patient/{id}', [DoctorController::class, 'newpp']);
Route::post('/new-doc', [DoctorController::class, 'store'])->middleware(['auth']);
Route::get('/register1/{id}', [DoctorController::class, 'show']);