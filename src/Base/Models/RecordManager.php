<?php

namespace ByTIC\ProfileLinks\Base\Models;

use ByTIC\Records\Behaviors\Duplicate\CanDuplicateRecordsTrait;

class RecordManager extends \Nip\Records\RecordManager
{
    use CanDuplicateRecordsTrait;
}