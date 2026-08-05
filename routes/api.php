<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TextImageSectionController;

Route::get('/text-image-sections', [TextImageSectionController::class, 'index']);