<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Actions;

use Bytic\Actions\Action;
use ByTIC\ProfileLinks\ClicksStats\Actions\FindOrCreateClicksStat;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 */
class LogClick extends Action
{
    protected string $url = '';
    protected string $referer = '';
    protected string $userAgent = '';
    protected string $ip = '';

    public static function fromRequest(string $url, Request $request): static
    {
        $action = new static();
        $action->url = $url;
        $action->referer = (string) ($request->headers->get('referer') ?? '');
        $action->userAgent = (string) ($request->headers->get('User-Agent') ?? '');
        $action->ip = (string) ($request->getClientIp() ?? '');

        return $action;
    }

    public function withReferer(string $referer): static
    {
        $this->referer = $referer;
        return $this;
    }

    public function withUserAgent(string $userAgent): static
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    public function withIp(string $ip): static
    {
        $this->ip = $ip;
        return $this;
    }

    public function execute(): void
    {
        $this->logClick();
        $this->updateStats();
    }

    protected function logClick(): void
    {
        $repository = ProfileLinksModels::clicksLogs();
        $log = $repository->getNew();
        $log->url = $this->url;
        $log->referer = $this->referer;
        $log->useragent = $this->userAgent;
        $log->ip = $this->ip;
        $log->save();
    }

    protected function updateStats(): void
    {
        $stat = FindOrCreateClicksStat
            ::forUrlRefererDate(
            $this->url,
            $this->referer,
            date('Y-m-d')
        )
            ->orCreate()
            ->fetch();

        $stat->incrementClicks();
        $stat->save();
    }
}
