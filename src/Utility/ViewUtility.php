<?php

namespace ByTIC\ProfileLinks\Utility;

/**
 *
 */
class ViewUtility
{
    public const NAME = 'ProfileLinks';

    public static function registerViewPaths($view, $module = null): void
    {
        $path = realpath(PathsHelpers::views() . '/' . $module);
        $view->addPath($path);
        $view->addPath($path, self::NAME);
    }
}
