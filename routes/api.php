<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {
    Route::get('demo', static function () {
        return response()->json(['message' => 'Hello, World!']);
    });

    Route::get('test', [App\Http\Controllers\DemoController::class, 'test'])->name('api.v1.test');
});