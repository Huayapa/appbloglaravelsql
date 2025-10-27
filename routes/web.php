<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD

Route::resource('posts', PostController::class);
=======
// oli
>>>>>>> 6ec7f17 (oalaa)
