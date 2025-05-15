<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Bundle\Admin\Forms\ProfileLinks;

use ByTIC\ProfileLinks\Links\Models\ProfileLink;
use ByTIC\ProfileLinks\Parser\LinkTypeParser;

/**
 * @method ProfileLink getModel()
 */
class DetailsForm extends AbstractForm
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-promotion-code-form');

        $this->initializeName();
        $this->initializeUrl();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeName()
    {
        $this->addInput('name', translator()->trans('name'), true);
    }

    protected function initializeUrl()
    {
        $this->addInput('url', translator()->trans('url'), true);
    }

    public function saveToModel(): void
    {
        parent::saveToModel();
        LinkTypeParser::parseType($this->getModel());
    }

}
