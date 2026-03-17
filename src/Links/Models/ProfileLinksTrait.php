<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordsTrait as HasTypesRecordsTrait;
use ByTIC\ProfileLinks\Base\Models\Behaviours\HasDatabaseConnectionTrait;
use ByTIC\ProfileLinks\Base\Models\Behaviours\Timestampable\TimestampableManagerTrait;
use ByTIC\ProfileLinks\Types\AbstractType;
use ByTIC\ProfileLinks\Utility\PathsHelpers;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use ByTIC\ProfileLinks\Utility\PackageConfig;
use Nip\Database\Connections\Connection;

trait ProfileLinksTrait
{
    use HasTypesRecordsTrait;
    use TimestampableManagerTrait;
    use HasDatabaseConnectionTrait;

    public function initRelations()
    {
        parent::initRelations();
        $this->initRelationsProfileLinks();
    }

    protected function initRelationsProfileLinks()
    {
        $this->initRelationsSubject();
    }

    protected function initRelationsSubject()
    {
        $this->morphTo('ProfileSubject', ['morphTypeField' => 'subject', 'morphPrefix' => 'subject']);
    }

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