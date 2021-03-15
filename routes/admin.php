<?php

use Illuminate\Support\Facades\Route;

Route::get('/string/{name}', function ($name) {
    return $name;
})->name('string');