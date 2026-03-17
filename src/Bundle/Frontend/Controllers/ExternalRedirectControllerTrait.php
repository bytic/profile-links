<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Bundle\Frontend\Controllers;

use ByTIC\ProfileLinks\ClicksLogs\Actions\LogClick;

trait ExternalRedirectControllerTrait
{
    use AbstractControllerTrait;

    public function external(): void
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

        LogClick::fromRequest($url)->execute();

        $this->payload()->with(['redirect_url' => $url]);
    }
}
