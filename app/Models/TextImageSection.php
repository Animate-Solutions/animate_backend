<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextImageSection extends Model
{
    protected $fillable = [
        'header',
        'slug',
        'text',
        'image',
        'image_position',
        'sort_order',
        'is_active',
    ];
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : null;
    }
}
