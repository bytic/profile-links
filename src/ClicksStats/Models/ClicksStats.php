<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Models;

use ByTIC\ProfileLinks\Base\Models\RecordManager;
use ByTIC\ProfileLinks\ClicksStats\Dto\ClicksStatsTable;

class ClicksStats extends RecordManager
{
    use ClicksStatsTrait;

    public const TABLE = ClicksStatsTable::NAME;

    public function getRootNamespace(): string
    {
        return 'ByTIC\ProfileLinks\ClicksStats\Models\\';
    }
}
