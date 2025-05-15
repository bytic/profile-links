<?php

namespace ByTIC\ProfileLinks\Utility;

/**
 * Class PathsHelpers.
 */
class PathsHelpers
{

    public static function basePath(): string
    {
        return dirname(dirname(__DIR__));
    }

    public static function config($path = null): string
    {
        return static::basePath() . '/config' . $path;
    }

    public static function migrations($path = null): string
    {
        return static::basePath() . '/migrations' . $path;
    }

    public static function resources($path = null): string
    {
        return static::basePath() . '/resources' . $path;
    }

    public static function assets($path = null): string
    {
        return static::resources() . '/assets' . $path;
    }

    public static function lang($path = null): string
    {
        return static::resources() . '/lang' . $path;
    }

    public static function views($path = null): string
    {
        return static::resources() . '/views' . $path;
    }
}
