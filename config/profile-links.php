<?php

use ByTIC\ProfileLinks\Links\Models\ProfileLinks;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

return [
    'models' => [
        ProfileLinksModels::LINKS => ProfileLinks::class,
    ],
    'tables' => [
        ProfileLinksModels::LINKS => ProfileLinks::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];
