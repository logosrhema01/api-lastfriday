<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CloudinaryController;


Route::get('/gallery/{imageName}', [CloudinaryController::class, 'show']);