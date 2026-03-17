<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Models;

use ByTIC\ProfileLinks\Utility\PackageConfig;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

trait ClicksStatsTrait
{
    protected function generateTable(): string
    {
        return PackageConfig::tableName(ProfileLinksModels::CLICKS_STATS, ClicksStats::TABLE);
    }

    protected function newDbConnection()
    {
        return app('db')->connection(PackageConfig::databaseConnection());
    }
}
