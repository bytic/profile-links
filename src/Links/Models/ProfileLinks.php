<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\ProfileLinks\Base\Models\RecordManager;
use ByTIC\ProfileLinks\Links\Dto\ProfileLinksTable;

class ProfileLinks extends RecordManager
{
    use ProfileLinksTrait;

    public const TABLE = ProfileLinksTable::NAME;
}