<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoMetadata extends Model
{
    use HasFactory;

    protected $table = 'seo_metadata';

    protected $fillable = [
        'page_slug',
        'title',
        'description',
        'keywords',
        'og_image',
        'canonical_url',
        'noindex',
    ];

    protected $casts = [
        'noindex' => 'boolean',
    ];
}
