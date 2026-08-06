<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TextImageSectionController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ProductController;

Route::get('/text-image-sections', [TextImageSectionController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);