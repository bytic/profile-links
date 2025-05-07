<?php

use ByTIC\ProfileLinks\Links\Models\ProfileLinks;
use ByTIC\ProfileLinks\Utility\FormsBuilderModels;

return [
    'models' => [
        FormsBuilderModels::LINKS => ProfileLinks::class,
    ],
    'tables' => [
        FormsBuilderModels::LINKS => ProfileLinks::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];
