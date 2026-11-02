<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait UploadsWebp
{
    /**
     * Upload an image and convert it to WebP natively using GD.
     *
     * @param UploadedFile $file
     * @param string $directory
     * @param int $quality
     * @return string
     */
    protected function uploadAndConvertToWebp(UploadedFile $file, $directory, $quality = 85)
    {
        $filename = Str::random(40) . '.webp';
        $destinationPath = $directory . '/' . $filename;
        $fullPath = storage_path('app/public/' . $destinationPath);

        // Ensure directory exists
        $dir = dirname($fullPath);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $info = getimagesize($file->getPathname());
        $mime = $info['mime'] ?? '';

        $image = null;
        switch ($mime) {
            case 'image/jpeg':
                $image = @imagecreatefromjpeg($file->getPathname());
                break;
            case 'image/png':
                $image = @imagecreatefrompng($file->getPathname());
                if ($image) {
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                }
                break;
            case 'image/gif':
                $image = @imagecreatefromgif($file->getPathname());
                if ($image) {
                    imagepalettetotruecolor($image);
                }
                break;
            case 'image/webp':
            case 'image/avif':
                // Already modern format, just store it directly with original extension
                $originalExt = $file->getClientOriginalExtension();
                $filename = Str::random(40) . '.' . $originalExt;
                return $file->storeAs($directory, $filename, 'public');
            default:
                throw new \Exception('Unsupported image type.');
        }

        if ($image) {
            imagewebp($image, $fullPath, $quality);
            imagedestroy($image);
            return $destinationPath;
        }

        throw new \Exception('Failed to process image.');
    }
}
