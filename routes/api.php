<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentClassesController;


Route::get('/class', [StudentClassesController::class, 'index']);
