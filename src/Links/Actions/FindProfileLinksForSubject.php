<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Links\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\Entities\FindRecords;
use Bytic\Actions\Behaviours\HasSubject\HasSubject;

/**
 *
 */
class FindProfileLinksForSubject extends Action
{
    use Behaviours\HasRepository;
    use FindRecords;
    use HasSubject;

    public static function forSubject($subject): static
    {
        $action = static::for($subject);

        return $action;
    }

    protected function findParams(): array
    {
        return [
            'where' => [
                ['subject = ?', $this->getSubject()->getManager()->getMorphName()],
                ['subject_id = ?', $this->getSubject()->id],
            ],
        ];
    }
}
