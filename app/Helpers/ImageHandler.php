<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageHandler
{
    /**
     * Handle the image upload.
     *
     * @param \Illuminate\Http\UploadedFile $image
     * @param string $directory
     * @param int $maxSize
     * @param array $allowedExtensions
     * @return string
     * @throws \Exception
     */

    public static function uploadImage($image, $directory, $maxSize = 1024, $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'])
    {
        try {
            $extension = $image->getClientOriginalExtension();
            if (!in_array(strtolower($extension), $allowedExtensions)) {
                throw new \Exception('Invalid image extension. Allowed extensions are: ' . implode(', ', $allowedExtensions));
            }

            if ($image->getSize() > $maxSize * 1024) {
                throw new \Exception('Image size exceeds the maximum allowed size.');
            }

            $imageName = Str::random(20) . '.' . $extension;
            $finalPath = public_path("images/$directory/$imageName");
            $image->move(public_path("images/$directory"), $imageName);

            return "/images/$directory/$imageName";
        } catch (\Exception $e) {
            throw new \Exception("Failed to upload image. {$e->getMessage()}");
        }
    }
}
