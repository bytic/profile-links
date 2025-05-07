<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordsTrait as HasTypesRecordsTrait;
use ByTIC\ProfileLinks\Utility\FormsBuilderModels;
use ByTIC\ProfileLinks\Utility\PackageConfig;

trait ProfileLinksTrait
{
    use HasTypesRecordsTrait;

    protected function generateTable()
    {
        return PackageConfig::tableName(FormsBuilderModels::LINKS, ProfileLinks::TABLE);
    }
}