<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {
    Route::get('demo', static function () {
        return response()->json(['message' => 'Hello, World!']);
    });
});