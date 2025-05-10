<?php

namespace ByTIC\ProfileLinks\Types;

use Utopia\Domains\Domain;

/**
 * Class BankTransfer
 * @package Paytic\Payments\Models\Methods\Types
 */
class Facebook extends AbstractType
{
    public const NAME = 'facebook';

    protected function validDomains(): array
    {
        return ['facebook.com'];
    }
}
