<?php

namespace ByTIC\ProfileLinks\Utility;

use ByTIC\ProfileLinks\ClicksLogs\Models\ClicksLogs;
use ByTIC\ProfileLinks\ClicksStats\Models\ClicksStats;
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
    public const CLICKS_LOGS = 'clicks_logs';
    public const CLICKS_STATS = 'clicks_stats';

    /**
     * @return RecordManager|ProfileLinks
     */
    public static function links(): ProfileLinks|RecordManager
    {
        return static::getModels('forms', ProfileLinks::class);
    }

    /**
     * @return RecordManager|ClicksLogs
     */
    public static function clicksLogs(): ClicksLogs|RecordManager
    {
        return static::getModels(self::CLICKS_LOGS, ClicksLogs::class);
    }

    /**
     * @return RecordManager|ClicksStats
     */
    public static function clicksStats(): ClicksStats|RecordManager
    {
        return static::getModels(self::CLICKS_STATS, ClicksStats::class);
    }

    protected static function packageName(): string
    {
        return ProfileLinksServiceProvider::NAME;
    }
}
