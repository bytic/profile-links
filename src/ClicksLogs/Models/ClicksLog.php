<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Models;

use ByTIC\ProfileLinks\Base\Models\Record;

class ClicksLog extends Record
{
    use ClicksLogTrait;

    public function getRegistry()
    {
        // TODO: Implement getRegistry() method.
    }
}
