<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AdminController;   
   
Route::get('/', [HomeController::class, 'index']);
Route::get('/admin-home', [AdminController::class, 'index']);