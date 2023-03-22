<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CriosController;

Route::get('/', [MainController::class, 'index'])->name('crioses');
Route::resource('admin', CriosController::class);