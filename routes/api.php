<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;

// API Routes untuk Customer
Route::apiResource('customers', CustomerController::class);