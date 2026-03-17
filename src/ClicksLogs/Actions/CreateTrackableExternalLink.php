<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Actions;

use Bytic\Actions\Action;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

class CreateTrackableExternalLink extends Action
{
    public static function for(string $url)
    {
        $params = ['url' => urlencode($url)];
        return ProfileLinksModels::clicksLogs()->compileURL('redirect', $params, 'frontend');
    }
}