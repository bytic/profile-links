<?php

namespace ByTIC\ProfileLinks\Bundle\Admin\Controllers;

use ByTIC\ProfileLinks\Links\Actions\FindProfileLinksForSubject;

/**
 *
 */
trait ProfileLinksSubjectControllerTrait
{
    use AbstractControllerTrait;

    protected function viewInitProfileLinks($subject)
    {
        $subject = $subject ?? $this->getModelFromRequest();
        $action = FindProfileLinksForSubject::for($subject);

        $this->payload()->with([
            'profile_links' => $action->fetch(),
        ]);
    }

}
