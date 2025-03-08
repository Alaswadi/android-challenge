<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $connected = false;
    $error = null;

    try {
        DB::connection()->getPdo();
        $connected = true;
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }

    return view('test', [
        'connected' => $connected,
        'error' => $error
    ]);
});
