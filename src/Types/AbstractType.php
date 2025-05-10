<?php

namespace ByTIC\ProfileLinks\Types;

use ByTIC\Models\SmartProperties\Properties\Types\Generic;
use  ByTIC\ProfileLinks\Links\Models\ProfileLink;
use Utopia\Domains\Domain;

/**
 * Class AbstractType
 * @package Paytic\Payments\Models\Methods\Types
 * @method ProfileLink getItem()
 */
abstract class AbstractType extends Generic
{
    public static function namespace()
    {
        return __NAMESPACE__;
    }
    /**
     * @param Domain $domain
     * @return bool
     */
    public function isValidDomain(Domain $domain): bool
    {
        $domains = $this->validDomains();
        if (in_array($domain->getRegisterable(), $domains)) {
            return true;
        }
        return false;
    }

    /**
     * @return string[]
     */
    protected function validDomains(): array
    {
        return [];
    }
}
