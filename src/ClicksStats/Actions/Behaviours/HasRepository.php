<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Actions\Behaviours;

use ByTIC\ProfileLinks\ClicksStats\Models\ClicksStats;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Nip\Records\RecordManager;

trait HasRepository
{
    protected function generateRepository(): ClicksStats|RecordManager
    {
        return ProfileLinksModels::clicksStats();
    }
}
