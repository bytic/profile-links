<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Actions\Behaviours;

use ByTIC\ProfileLinks\ClicksLogs\Models\ClicksLogs;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Nip\Records\RecordManager;

trait HasRepository
{
    protected function generateRepository(): ClicksLogs|RecordManager
    {
        return ProfileLinksModels::clicksLogs();
    }
}
