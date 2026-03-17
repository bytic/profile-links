<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Models;

use ByTIC\ProfileLinks\Base\Models\Record;

class ClicksStat extends Record
{
    use ClicksStatTrait;

    public function getRegistry()
    {
        // TODO: Implement getRegistry() method.
    }
}
