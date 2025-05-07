<?php

namespace ByTIC\ProfileLinks\Utility;

/**
 * Class PathsHelpers.
 */
class PathsHelpers
{
    /**
     * @param $path
     * @param $theme
     *
     * @return string
     */
    public static function views($path)
    {
        return static::basePath().'/resources/views'.$path;
    }

    public static function basePath(): string
    {
        return dirname(dirname(__DIR__));
    }

    public static function migrations($path = null): string
    {
        return static::basePath().'/database/migrations'.$path;
    }

    public static function config($path = null): string
    {
        return static::basePath().'/config'.$path;
    }

}
