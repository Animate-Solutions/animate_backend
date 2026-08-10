<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'icon',
        'description',
        'link_label',
        'link_href',
        'sort_order',
        'is_active',
    ];
}
