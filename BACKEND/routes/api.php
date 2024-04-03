<?php

use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
  return response()->json(['message' => 'It works!']);
});

// Auth & Registration Routes

// Public Routes
Route::get('/tags', [TagController::class, 'index']);


