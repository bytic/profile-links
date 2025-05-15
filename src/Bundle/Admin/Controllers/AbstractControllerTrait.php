<?php

namespace ByTIC\ProfileLinks\Bundle\Admin\Controllers;

use ByTIC\ProfileLinks\Utility\ViewUtility;
use Nip\Controllers\Response\ResponsePayload;
use Nip\View\View;

/**
 * @method ResponsePayload payload()
 */
trait AbstractControllerTrait
{
    use \Nip\Controllers\Traits\AbstractControllerTrait;

    public function registerViewPaths(View $view): void
    {
        parent::registerViewPaths($view);

        ViewUtility::registerViewPaths($view, 'admin');
    }
}