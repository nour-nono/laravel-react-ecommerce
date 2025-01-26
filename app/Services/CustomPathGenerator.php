<?php

namespace App\Services;

use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CustomPathGenerator implements PathGenerator
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getPath(Media $media): string
    {
        // Implement your logic here
        return md5($media->id . config('app.key')) . '/';
    }

    public function getPathForConversions(Media $media): string
    {
        // Implement your logic here
        return md5($media->id . config('app.key')) . '/conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        // Implement your logic here
        return md5($media->id . config('app.key')) . '/responsive-images/';
    }
}
