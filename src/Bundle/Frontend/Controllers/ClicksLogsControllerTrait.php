<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Bundle\Frontend\Controllers;

use ByTIC\ProfileLinks\ClicksLogs\Actions\LogClick;
use Symfony\Component\HttpFoundation\Request;

trait ClicksLogsControllerTrait
{
    use AbstractControllerTrait;

    public function redirect(): void
    {
        $url = $this->getRequest()->get('url');

        if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
            $this->forward404();
            return;
        }

        $scheme = strtolower(parse_url($url, PHP_URL_SCHEME) ?? '');
        if (!in_array($scheme, ['http', 'https'], true)) {
            $this->forward404();
            return;
        }

        LogClick::fromRequest($url, Request::createFromGlobals())->execute();

        $this->payload()->with(['redirect_url' => $url]);
    }
}
