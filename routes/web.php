<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotographerrController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


                    //auth routes
Route::get('/login',[AuthController::class, 'loginView'])->name('login');
Route::post('/login',[AuthController::class, 'login']);
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'create']);


                    // admin route 
Route::get('/admin' , [AdminController::class,'view']);


                    // user route
Route::get('/user',[UserController::class,'view']);



                    //photographe route
Route::get('/photographe',[PhotographerrController::class,'view']);
Route::post('/photographe',[PhotographerrController::class,'createPublication'])->name('createPublication');