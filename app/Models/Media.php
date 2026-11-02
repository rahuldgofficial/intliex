<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'path',
        'mime_type',
        'size',
        'disk',
        'alt_text',
    ];

    protected $casts = [
        'size' => 'integer',
    ];

    protected function url(): Attribute
    {
        return Attribute::make(
            get: function () {
                $disk = $this->disk ?? config('filesystems.default');
                return Storage::disk($disk)->url($this->path);
            }
        );
    }

    protected function humanReadableSize(): Attribute
    {
        return Attribute::make(
            get: function () {
                $bytes = $this->size;
                $units = ['B', 'KB', 'MB', 'GB', 'TB'];
                
                if ($bytes === 0) {
                    return '0 B';
                }
                
                $i = floor(log($bytes, 1024));
                return round($bytes / pow(1024, $i), 2) . ' ' . $units[$i];
            }
        );
    }
}
