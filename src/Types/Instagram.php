<?php

namespace ByTIC\ProfileLinks\Types;

/**
 * Class CardPresent
 */
class Instagram extends AbstractType
{
    public const NAME = 'instagram';
    protected function validDomains(): array
    {
        return ['instagram.com'];
    }
}
