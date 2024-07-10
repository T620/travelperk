<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\DemoController::class, 'index']);

include __DIR__ . '/api.php';