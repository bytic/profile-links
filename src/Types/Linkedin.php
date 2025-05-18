<?php

namespace ByTIC\ProfileLinks\Types;

/**
 * Class BankTransfer
 * @package Paytic\Payments\Models\Methods\Types
 */
class Linkedin extends AbstractType
{
    public const NAME = 'linkedin';

    public function getIconHtml(): string
    {
        return '<i class="fab fa-linkedin-in"></i>';
    }

    protected function validDomains(): array
    {
        return ['linkedin.com'];
    }
}
