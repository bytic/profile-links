<?php

namespace ByTIC\ProfileLinks\LinkSubjects\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordsTrait as HasTypesRecordsTrait;
use ByTIC\ProfileLinks\Types\AbstractType;
use ByTIC\ProfileLinks\Utility\PathsHelpers;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use ByTIC\ProfileLinks\Utility\PackageConfig;

trait ProfileLinksTrait
{

    public function initRelations()
    {
        parent::initRelations();
        $this->initRelationsProfileLinks();
    }

    protected function initRelationsProfileLinks()
    {
        $this->morphTo('LinkSubject', ['morphPrefix' => 'entry']);
    }
}