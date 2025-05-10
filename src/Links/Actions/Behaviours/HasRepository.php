<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Links\Actions\Behaviours;

use ByTIC\ProfileLinks\Links\Models\ProfileLinks;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Nip\Records\RecordManager;

trait HasRepository
{

    protected function generateRepository(): ProfileLinks|RecordManager
    {
        return ProfileLinksModels::links();
    }
}