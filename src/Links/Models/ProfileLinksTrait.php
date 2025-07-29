<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordsTrait as HasTypesRecordsTrait;
use ByTIC\ProfileLinks\Types\AbstractType;
use ByTIC\ProfileLinks\Utility\PathsHelpers;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use ByTIC\ProfileLinks\Utility\PackageConfig;
use Nip\Database\Connections\Connection;

trait ProfileLinksTrait
{
    use HasTypesRecordsTrait;

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

    /**
     * @return Connection
     */
    protected function newDbConnection()
    {
        return app('db')->connection(\ByTIC\ProfileLinks\Utility\PackageConfig::databaseConnection());
    }
}