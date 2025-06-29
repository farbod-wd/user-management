<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\panel\AdminController;
use App\Http\Controllers\panel\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class,'login'])->name('login');


Route::post('/signIn' , [AuthController::class , 'signIn'])->name('signIn');
Route::post('/signOut',[AuthController::class ,'logout'])->name('signOut');
Route::get('/register' , [AuthController::class , 'registeration'])->name('register.index');
Route::post('/register' , [AuthController::class , 'register'])->name('register');

Route::prefix('/admin')->middleware('auth')->group(function(){
Route::get('/' , [AdminController::class , 'index'])->name('admin.index');
Route::resource('/users' , UserController::class);
});