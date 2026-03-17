<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Models;

trait ClicksLogTrait
{
    public ?string $url = null;
    public ?string $referer = null;
    public ?string $useragent = null;
    public ?string $ip = null;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getReferer(): ?string
    {
        return $this->referer;
    }

    public function setReferer(?string $referer): static
    {
        $this->referer = $referer;
        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->useragent;
    }

    public function setUserAgent(?string $userAgent): static
    {
        $this->useragent = $userAgent;
        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): static
    {
        $this->ip = $ip;
        return $this;
    }
}
