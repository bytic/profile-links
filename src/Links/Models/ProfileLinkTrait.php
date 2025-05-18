<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordTrait as HasTypesRecordTrait;
use ByTIC\ProfileLinks\LinkSubjects\Models\ProfileSubjectTrait;
use Nip\Records\AbstractModels\Record;

/**
 * @method ProfileSubjectTrait getProfileSubject
 */
trait ProfileLinkTrait
{
    use HasTypesRecordTrait;

    public ?string $url = null;

    public function getName()
    {
        return $this->getPropertyRaw('name');
    }

    public function getExternalUrl(): ?string
    {
        return $this->url;
    }

    public function setExternalUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getIconBadge()
    {
        return '<span class="badge bg-secondary">'
            . $this->getIconHTML()
            . '</span>';
    }

    public function getIconHtml(): string
    {
        return $this->getType()->getIconHTML();
    }

    public function setSubjectRecord(Record $subject)
    {
        $this->subject = $subject->getManager()->getMorphName();
        $this->subject_id = $subject->id;
        return $this;
    }
}