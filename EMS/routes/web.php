<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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



Route::get('/login', function () {
    return Inertia::render('Auth',['current'=>'login','reference'=>'registration']);
})->name('login');

Route::post('/login',[AuthController::class,'login']);

Route::get('/registration', function () {
    return Inertia::render('Auth',['current'=>'registration','reference'=>'login']);
});

//Admin routes
Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AppController::class,'dashboard'])->name('admin.dashboard');
});

//Operator routes
Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get('/manager/dashboard',[AppController::class,'dashboard'])->name('admin.dashboard');
});

//Manager routes
Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AppController::class,'dashboard'])->name('admin.dashboard');
});

//Employee routes
Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AppController::class,'dashboard'])->name('admin.dashboard');
});

Route::get('/test/dashboard',function(){
    return Inertia::render('Dashboard');
});