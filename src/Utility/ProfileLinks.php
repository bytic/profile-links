<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Utility;

use Nip\Container\Container;

class ProfileLinks
{
    public static function __callStatic($name, $arguments)
    {
        return static::instance()->$name(...$arguments);
    }

    /**
     * Singleton
     *
     * @return self
     */
    protected static function instance()
    {
        static $instance;
        if (!($instance instanceof static)) {
            $instance = Container::getInstance()->get(SignedUrlServiceProvider::SIGNER);
        }
        return $instance;
    }
}