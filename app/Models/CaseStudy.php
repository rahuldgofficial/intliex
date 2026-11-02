<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class CaseStudy extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'domain_id',
        'title',
        'slug',
        'client',
        'challenge',
        'solution',
        'results',
        'featured_image',
        'gallery',
        'technologies',
        'is_active',
        'is_featured',
        'published_at',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'gallery' => 'array',
        'technologies' => 'array',
        'published_at' => 'datetime',
    ];

    public function scopeActive(Builder $query): void
    {
        $query->where('is_active', true);
    }

    public function scopeFeatured(Builder $query): void
    {
        $query->where('is_featured', true);
    }

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }

    protected function challenge(): Attribute
    {
        return Attribute::make(set: fn ($value) => clean($value));
    }

    protected function solution(): Attribute
    {
        return Attribute::make(set: fn ($value) => clean($value));
    }

    protected function results(): Attribute
    {
        return Attribute::make(set: fn ($value) => clean($value));
    }

    public function getImageUrlAttribute(): ?string
    {
        if ($this->featured_image) {
            return asset('storage/' . $this->featured_image);
        }
        return null;
    }
}
