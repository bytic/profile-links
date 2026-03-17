<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Models;

use ByTIC\ProfileLinks\Base\Models\Behaviours\HasDatabaseConnectionTrait;
use ByTIC\ProfileLinks\Base\Models\Behaviours\Timestampable\TimestampableManagerTrait;
use ByTIC\ProfileLinks\Utility\PackageConfig;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

trait ClicksLogsTrait
{
    use TimestampableManagerTrait;
    use HasDatabaseConnectionTrait;

    protected function generateTable(): string
    {
        return PackageConfig::tableName(ProfileLinksModels::CLICKS_LOGS, ClicksLogs::TABLE);
    }
}
