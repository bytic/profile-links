<?php

namespace ByTIC\ProfileLinks\LinkSubjects\Models;

use ByTIC\Models\SmartProperties\RecordsTraits\HasTypes\RecordTrait as HasTypesRecordTrait;

/**
 *
 */
trait ProfileSubjectTrait
{
    use HasTypesRecordTrait;

    public ?string $url = null;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;
        return $this;
    }
}