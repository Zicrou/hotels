<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('hotel', 'App\Http\Controllers\Admin\HotelController')->except(['show']);
});