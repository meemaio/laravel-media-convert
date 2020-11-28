<?php

namespace Meema\MediaConvert\Traits;

use Meema\MediaConvert\Models\MediaConversion;

trait HasMediaConversions
{
    /**
     * Get all of the media items' conversions.
     */
    public function conversions()
    {
        return $this->morphMany(MediaConversion::class, 'model');
    }
}
