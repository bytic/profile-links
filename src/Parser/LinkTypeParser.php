<?php

namespace ByTIC\ProfileLinks\Parser;

use ByTIC\Models\SmartProperties\Properties\Types\Generic;
use ByTIC\ProfileLinks\Links\Models\ProfileLink;
use ByTIC\ProfileLinks\Types\Website;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Utopia\Domains\Domain;

class LinkTypeParser
{
    /**
     * @param ProfileLink $link
     * @param string $url
     * @return Generic|mixed|void
     * @throws \Exception
     */
    public static function parseType($link, $url = null)
    {
        $url = $url ?? $link->getUrl();
        $parsedUrl = parse_url($url);
        if (empty($parsedUrl['host'])) {
            return;
        }
        $domain = new Domain($parsedUrl['host']);

        $types = ProfileLinksModels::links()->getTypes();
        foreach ($types as $type) {
            if ($type->isValidDomain($domain)) {
                $link->setType($type);
                return $type;
            }
        }
        $link->setType(Website::NAME);
    }
}
