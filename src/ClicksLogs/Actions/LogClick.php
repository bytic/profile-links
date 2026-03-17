<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Actions;

use Bytic\Actions\Action;
use ByTIC\ProfileLinks\ClicksStats\Actions\FindOrCreateClicksStat;
use ByTIC\ProfileLinks\Utility\ProfileLinksModels;

/**
 *
 */
class LogClick extends Action
{
    protected string $url = '';
    protected string $referer = '';
    protected string $userAgent = '';
    protected string $ip = '';

    public static function fromRequest(string $url): static
    {
        $action = new static();
        $action->url = $url;
        $action->referer = $_SERVER['HTTP_REFERER'] ?? '';
        $action->userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $action->ip = static::resolveIp();

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
        $stat = FindOrCreateClicksStat::forUrlRefererDate(
            $this->url,
            $this->referer,
            date('Y-m-d')
        )->fetchOrCreate();

        $stat->incrementClicks();
        $stat->save();
    }

    protected static function resolveIp(): string
    {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $parts = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($parts[0]);
        }

        return $_SERVER['REMOTE_ADDR'] ?? '';
    }
}
