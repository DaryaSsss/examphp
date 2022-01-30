<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UsageController;
use App\Models\Usage;

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

Route::get('', [UsageController::class, 'main']);

Route::get('/registration', [AuthController::class, 'index']);

Route::post('/registration', [AuthController::class, 'registration']);

Route::get('/login', [AuthController::class, 'indexLogin']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout',  [AuthController::class, 'logout']);

Route::get('/places', [PlaceController::class, 'index']);

Route::post('/places', [PlaceController::class, 'store']);
Route::get('/places/add', [PlaceController::class, 'add']);

Route::get('/places/delete/{id}',[PlaceController::class,'delete']);

Route::get('/places/update/{id}',[PlaceController::class,'update']);

Route::post('/places/update/{id}',[PlaceController::class,'store']);

Route::get('/things', [ThingController::class, 'index']);

Route::post('/things', [ThingController::class, 'store']);
Route::get('/things/add', [ThingController::class, 'add']);

Route::get('/things/delete/{id}',[ThingController::class,'delete']);

Route::get('/things/update/{id}',[ThingController::class,'update']);

Route::post('/things/update/{id}',[ThingController::class,'store']);

Route::get('/mythings',[ThingController::class,'mythings']);

Route::get('/usages/{id}',[UsageController::class,'index']);

Route::post('/usages/{id}',[UsageController::class,'store']);