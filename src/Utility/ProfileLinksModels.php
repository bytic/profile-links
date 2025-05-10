<?php

namespace ByTIC\ProfileLinks\Utility;

use ByTIC\ProfileLinks\Links\Models\ProfileLinks;
use ByTIC\ProfileLinks\ProfileLinksServiceProvider;
use ByTIC\PackageBase\Utility\ModelFinder;
use Nip\Records\RecordManager;

/**
 * Class NotifierBuilderModels.
 */
class ProfileLinksModels extends ModelFinder
{
    public const LINKS = 'links';

    /**
     * @return RecordManager|ProfileLinks
     */
    public static function links(): ProfileLinks|RecordManager
    {
        return static::getModels('forms', ProfileLinks::class);
    }

    protected static function packageName(): string
    {
        return ProfileLinksServiceProvider::NAME;
    }
}
