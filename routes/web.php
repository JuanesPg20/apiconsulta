<?php

use Illuminate\Support\Facades\Route;


Route::get('/formOne', function () {
    return view('forms.formOne');
})->name('formOne');

Route::get('/formTwo', function () {
    return view('forms.formTwo');
})->name('formTwo');

Route::get('/formThree', function () {
    return view('forms.formThree');
})->name('formThree');
