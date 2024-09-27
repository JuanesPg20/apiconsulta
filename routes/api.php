<?php

use App\Http\Controllers\GetFromController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/getfrom', [GetFromController::class, 'index'])->name('getfrom')->middleware('auth.basic');
});
