<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Auth\RegisteredUserController::class)->group(function(){
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'store');
})->middleware(['guest']);
