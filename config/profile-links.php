<?php

use ByTIC\ProfileLinks\ClicksLogs\Models\ClicksLogs;
use ByTIC\ProfileLinks\ClicksStats\Models\ClicksStats;
use ByTIC\ProfileLinks\Links\Models\ProfileLinks;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

return [
    'models' => [
        ProfileLinksModels::LINKS => ProfileLinks::class,
        ProfileLinksModels::CLICKS_LOGS => ClicksLogs::class,
        ProfileLinksModels::CLICKS_STATS => ClicksStats::class,
    ],
    'tables' => [
        ProfileLinksModels::LINKS => ProfileLinks::TABLE,
        ProfileLinksModels::CLICKS_LOGS => ClicksLogs::TABLE,
        ProfileLinksModels::CLICKS_STATS => ClicksStats::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];
