<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AdminController;   
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BlogController;  
   
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/admin-home', [AdminController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);