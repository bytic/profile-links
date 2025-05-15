<?php

namespace ByTIC\ProfileLinks\Links\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordTrait as HasTypesRecordTrait;
use Nip\Records\AbstractModels\Record;

trait ProfileLinkTrait
{
    use HasTypesRecordTrait;

    public ?string $url = null;

    public function getExternalUrl(): ?string
    {
        return $this->url;
    }

    public function setExternalUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function setSubjectRecord(Record $subject)
    {
        $this->subject = $subject->getManager()->getMorphName();
        $this->subject_id = $subject->id;
        return $this;
    }
}