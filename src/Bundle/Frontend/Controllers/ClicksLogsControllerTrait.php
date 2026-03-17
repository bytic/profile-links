<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Bundle\Frontend\Controllers;

use ByTIC\ProfileLinks\ClicksLogs\Actions\LogClick;
use Symfony\Component\HttpFoundation\Request;

trait ClicksLogsControllerTrait
{
    use AbstractControllerTrait;

    public function external(): void
    {
        $request = $this->getRequest();
        $url = $request->get('url');

        if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
            $this->forward404($url);
            return;
        }

        $scheme = strtolower(parse_url($url, PHP_URL_SCHEME) ?? '');
        if (!in_array($scheme, ['http', 'https'], true)) {
            $this->forward404($url);
            return;
        }

        LogClick::fromRequest($url, $request)->execute();

        $this->payload()->with(['redirect_url' => $url]);
        $this->setLayout('blank');
    }

    protected function forward404($url)
    {
        die('Invalid URL:' .$url);
    }
}
