<?php

namespace ByTIC\ProfileLinks\Types;

/**
 * Class BankTransfer
 * @package Paytic\Payments\Models\Methods\Types
 */
class Linkedin extends AbstractType
{
    public const NAME = 'linkedin';
    protected function validDomains(): array
    {
        return ['linkedin.com'];
    }
}
