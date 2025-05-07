<?php

namespace ByTIC\ProfileLinks\Base\Models;

use ByTIC\Records\Behaviors\Duplicate\CanDuplicateRecordTrait;

/**
 */
class Record extends \Nip\Records\Record
{
    use CanDuplicateRecordTrait;
}
