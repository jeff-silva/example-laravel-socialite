<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $uid = uniqid();
    return "uid: {$uid}";
});
