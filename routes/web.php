<?php

use App\Http\Controllers\AssingrollToUserController;
use App\Http\Controllers\RoleController;
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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::resource('user',UserController::class );
    Route::get('user-view',[UserController::class,'showUser'] )->name('user-view');
    Route::get('user-edit',[UserController::class,'editUser'] )->name('user-edit');
    Route::get('role-create',[RoleController::class,'create'])->name('role-create');
    Route::get('role-list',[RoleController::class,'index'])->name('role-list');
    Route::get('role-delete',[RoleController::class,'destroy']);
    Route::resource('role',RoleController::class );
    Route::resource('assing-role',AssingrollToUserController::class);
});
