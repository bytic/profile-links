<?php

namespace ByTIC\ProfileLinks\Types;

/**
 * Class CardPresent
 */
class Instagram extends AbstractType
{
    public const NAME = 'instagram';


    public function getIconHtml(): string
    {
        return '<i class="fab fa-instagram"></i>';
    }

    protected function validDomains(): array
    {
        return ['instagram.com'];
    }
}
