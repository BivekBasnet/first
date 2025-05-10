<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admincontroller;

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'homepage'])->name('home');

Route::get('/user',[HomeController::class,'homepage'])->name('home');

Route::get('/home', [admincontroller::class,'index'])->middleware('auth')->name('home');

Route::get('/post',[admincontroller::class,'postpage']);

Route::post('/add_post',[admincontroller::class,'post_page']);

Route::get('/show',[admincontroller::class,'show']);

Route::get('/delete_post/{id}',[admincontroller::class,'delete']);

Route::get('/edit/{id}',[admincontroller::class,'edit']);

Route::post('/update_post/{id}',[admincontroller::class,'update_post']);
