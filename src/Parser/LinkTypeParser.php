<?php

namespace ByTIC\ProfileLinks\Parser;

use ByTIC\ProfileLinks\Utility\FormsBuilderModels;
use Utopia\Domains\Domain;

class LinkTypeParser
{
    public static function parseType($link, $url = null)
    {
        $url = $url ?? $link->getUrl();
        $domain = new Domain($url);

        $types = FormsBuilderModels::links()->getTypes();
    }
}
