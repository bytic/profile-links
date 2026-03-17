<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Models;

use ByTIC\ProfileLinks\Base\Models\Behaviours\HasDatabaseConnectionTrait;
use ByTIC\ProfileLinks\Base\Models\Behaviours\Timestampable\TimestampableManagerTrait;
use ByTIC\ProfileLinks\Utility\PackageConfig;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

trait ClicksStatsTrait
{
    use TimestampableManagerTrait;
    use HasDatabaseConnectionTrait;
    protected function generateTable(): string
    {
        return PackageConfig::tableName(ProfileLinksModels::CLICKS_STATS, ClicksStats::TABLE);
    }

}
