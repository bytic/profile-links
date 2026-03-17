<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Bundle\Frontend\Controllers;

use ByTIC\ProfileLinks\Utility\ViewUtility;
use Nip\View\View;

trait AbstractControllerTrait
{
    use \Nip\Controllers\Traits\AbstractControllerTrait;

    public function registerViewPaths(View $view): void
    {
        parent::registerViewPaths($view);
        ViewUtility::registerViewPaths($view, 'frontend');
    }
}
