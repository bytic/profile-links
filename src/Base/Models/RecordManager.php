<?php

namespace ByTIC\ProfileLinks\Base\Models;

use ByTIC\Records\Behaviors\Duplicate\CanDuplicateRecordsTrait;

class RecordManager extends \Nip\Records\RecordManager
{
    use CanDuplicateRecordsTrait;
    use \ByTIC\Records\Behaviors\HasForms\HasFormsRecordsTrait;
    use \ByTIC\Records\Behaviors\I18n\I18nRecordsTrait;

}