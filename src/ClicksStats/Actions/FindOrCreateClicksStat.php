<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\Entities\FindRecord;

/**
 *
 */
class FindOrCreateClicksStat extends Action
{
    use Behaviours\HasRepository;
    use FindRecord;

    protected string $url;
    protected string $referer;
    protected string $date;

    public static function forUrlRefererDate(string $url, string $referer, string $date): static
    {
        $action = new static();
        $action->url = $url;
        $action->referer = $referer;
        $action->date = $date;

        return $action;
    }

    protected function findParams(): array
    {
        return [
            'where' => [
                ['url = ?', $this->url],
                ['referer = ?', $this->referer],
                ['date = ?', $this->date],
            ],
        ];
    }

    protected function orCreateData($data): array
    {
        $data['url'] = $this->url;
        $data['referer'] = $this->referer;
        $data['date'] = $this->date;
        $data['clicks'] = 0;

        return $data;
    }
}
