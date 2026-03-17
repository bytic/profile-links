<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Models;

use ByTIC\ProfileLinks\Base\Models\RecordManager;
use ByTIC\ProfileLinks\ClicksLogs\Dto\ClicksLogsTable;

class ClicksLogs extends RecordManager
{
    use ClicksLogsTrait;

    public const TABLE = ClicksLogsTable::NAME;
    public const CONTROLLER = 'profile_links-clicks_logs';

    public function getRootNamespace(): string
    {
        return 'ByTIC\ProfileLinks\ClicksLogs\Models\\';
    }
}
