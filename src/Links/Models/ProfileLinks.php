<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\ProfileLinks\Base\Models\RecordManager;

class ProfileLinks extends RecordManager
{
    use ProfileLinksTrait;

    public const TABLE = 'profile-links';
}