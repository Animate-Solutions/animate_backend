<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TextImageSectionController;
use App\Http\Controllers\Api\EventController;

Route::get('/text-image-sections', [TextImageSectionController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);