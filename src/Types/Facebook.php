<?php

namespace ByTIC\ProfileLinks\Types;

use ByTIC\Icons\Icons;
use Utopia\Domains\Domain;

/**
 * Class BankTransfer
 * @package Paytic\Payments\Models\Methods\Types
 */
class Facebook extends AbstractType
{
    public const NAME = 'facebook';

    public function getIconHtml(): string
    {
        return '<i class="fab fa-facebook-f"></i>';
    }

    protected function validDomains(): array
    {
        return ['facebook.com'];
    }
}
