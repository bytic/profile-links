<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Links\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\Entities\FindRecord;
use Bytic\Actions\Behaviours\HasSubject\HasSubject;

/**
 *
 */
class FindOrCreateProfileLink extends Action
{
    use Behaviours\HasRepository;
    use FindRecord;
    use HasSubject;

    protected string $url;


    public static function forSubjectUrl($subject, $url): static
    {
        $action = static::for($subject);
        $action->withUrl($url);

        return $action;
    }

    public function withUrl($subject): static
    {
        $this->url = $subject;
        return $this;
    }

    protected function findParams(): array
    {
        return [
            'where' => [
                ['subject = ?', $this->getSubject()->getManager()->getMorphName()],
                ['subject_id = ?', $this->getSubject()->id],
                ['url = ?', $this->url],
            ],
        ];
    }

    protected function orCreateData($data)
    {
        $data['subject'] = $this->getSubject()->getManager()->getMorphName();
        $data['subject_id'] = $this->getSubject()->id;
        $data['url'] = $this->url;
        return $data;
    }
}
