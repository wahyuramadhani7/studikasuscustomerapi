<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerWebController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('customers', CustomerWebController::class);