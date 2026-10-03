<?php

namespace Yoerioptr\TabtApiClient\Traits;

/**
 * Trait HydratesProperties.
 */
trait HydratesProperties
{
    protected function hydrateProperty(string $property, mixed $value): void
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
