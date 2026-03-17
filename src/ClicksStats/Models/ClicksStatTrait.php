<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Models;

trait ClicksStatTrait
{
    public ?string $url = null;
    public ?string $referer = null;
    public ?string $date = null;
    public int $clicks = 0;

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

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getClicks(): int
    {
        return (int) $this->clicks;
    }

    public function setClicks(int $clicks): static
    {
        $this->clicks = $clicks;
        return $this;
    }

    public function incrementClicks(int $by = 1): static
    {
        $this->clicks = $this->getClicks() + $by;
        return $this;
    }
}
