<?php

namespace ByTIC\ProfileLinks\Types;

/**
 * Class BankTransfer
 * @package Paytic\Payments\Models\Methods\Types
 */
class Strava extends AbstractType
{
    public const NAME = 'strava';

    protected function validDomains(): array
    {
        return ['strava.com'];
    }
}
