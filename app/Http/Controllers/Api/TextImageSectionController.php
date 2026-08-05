<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TextImageSection;

class TextImageSectionController extends Controller
{
    public function index()
    {
        return TextImageSection::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
    }
}