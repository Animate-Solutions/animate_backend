<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TextImageSectionController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TestimonialController;


Route::get('/text-image-sections', [TextImageSectionController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);