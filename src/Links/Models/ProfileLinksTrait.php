<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordsTrait as HasTypesRecordsTrait;
use ByTIC\ProfileLinks\Types\AbstractType;
use ByTIC\ProfileLinks\Utility\PathsHelpers;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use ByTIC\ProfileLinks\Utility\PackageConfig;

trait ProfileLinksTrait
{
    use HasTypesRecordsTrait;

    protected function generateTable()
    {
        return PackageConfig::tableName(ProfileLinksModels::LINKS, ProfileLinks::TABLE);
    }

    public function getTypesDirectory(): string
    {
        return PathsHelpers::basePath() . '/src/Types';
    }

    public function getTypeNamespace(): string
    {
        return AbstractType::namespace();
    }
}