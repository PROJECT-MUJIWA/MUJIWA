<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Auth\RegisteredUserController::class)->group(function(){
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'store');
    Route::get('/register/invite', 'indexInvite')->name('register.invite');
    Route::post('/register/invite', 'storeInvite');
})->middleware(['guest']);
