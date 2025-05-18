<?php

namespace ByTIC\ProfileLinks\Types;

/**
 * Class BankTransfer
 * @package Paytic\Payments\Models\Methods\Types
 */
class Strava extends AbstractType
{
    public const NAME = 'strava';

    public function getIconHtml(): string
    {
        return '<i class="fab fa-strava"></i>';
    }

    protected function validDomains(): array
    {
        return ['strava.com'];
    }
}
