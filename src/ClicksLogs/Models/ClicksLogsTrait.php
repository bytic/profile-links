<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Models;

use ByTIC\ProfileLinks\Utility\PackageConfig;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

trait ClicksLogsTrait
{
    protected function generateTable(): string
    {
        return PackageConfig::tableName(ProfileLinksModels::CLICKS_LOGS, ClicksLogs::TABLE);
    }

    protected function newDbConnection()
    {
        return app('db')->connection(PackageConfig::databaseConnection());
    }
}
