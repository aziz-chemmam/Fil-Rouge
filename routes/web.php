<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
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


Route::get('/', [PhotographerrController::class, 'lastAplouad'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/Gallery', [GalleryController::class, 'imageDesplay'])->name('Gallery');




//auth routes
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'create']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// admin route 

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'getUsers']);
    Route::get('/admin/user/{id}', [AdminController::class, 'editUser'])->name('editUser');
    Route::put('admin/update/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
    Route::get('/admin/delete/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
});

// user route



//photographe route
Route::middleware(['role:photographer'])->group(function () {
    Route::get('/photographe', [PhotographerrController::class, 'getPublication']);
    Route::post('/photographe', [PhotographerrController::class, 'createPublication'])->name('createPublication');
});


Route::get('/publication/{id}', [PhotographerrController::class, 'editPublication'])->name('editPublication');
Route::put('/publication/update/{id}', [PhotographerrController::class, 'updatePublication'])->name('updatePublication');
Route::get('/publication/delete/{id}', [PhotographerrController::class, 'deletePublication'])->name('deletePublication');
