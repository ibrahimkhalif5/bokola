<?php

namespace App\Helpers;

class ImageHelper
{
    public static function resizeAndCrop($filePath, $targetWidth, $targetHeight)
    {
        if (!file_exists($filePath)) {
            return;
        }

        $info = @getimagesize($filePath);
        if (!$info) {
            return;
        }

        [$width, $height, $type] = $info;

        $source = match ($type) {
            IMAGETYPE_JPEG => @imagecreatefromjpeg($filePath),
            IMAGETYPE_PNG  => @imagecreatefrompng($filePath),
            IMAGETYPE_GIF  => @imagecreatefromgif($filePath),
            default        => null,
        };

        if (!$source) {
            return;
        }

        $srcRatio = $width / $height;
        $targetRatio = $targetWidth / $targetHeight;

        if ($srcRatio > $targetRatio) {
            $cropW = (int) round($height * $targetRatio);
            $cropH = $height;
            $srcX = (int) round(($width - $cropW) / 2);
            $srcY = 0;
        } else {
            $cropW = $width;
            $cropH = (int) round($width / $targetRatio);
            $srcX = 0;
            $srcY = (int) round(($height - $cropH) / 2);
        }

        $target = imagecreatetruecolor($targetWidth, $targetHeight);

        if ($type === IMAGETYPE_PNG) {
            imagealphablending($target, false);
            imagesavealpha($target, true);
        }

        imagecopyresampled($target, $source, 0, 0, $srcX, $srcY, $targetWidth, $targetHeight, $cropW, $cropH);

        match ($type) {
            IMAGETYPE_JPEG => imagejpeg($target, $filePath, 95),
            IMAGETYPE_PNG  => imagepng($target, $filePath, 9),
            IMAGETYPE_GIF  => imagegif($target, $filePath),
            default        => null,
        };

        imagedestroy($source);
        imagedestroy($target);
    }
}
