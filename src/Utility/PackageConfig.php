<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Utility;

use ByTIC\ProfileLinks\ProfileLinksServiceProvider;
use Exception;

/**
 *
 */
class PackageConfig extends \ByTIC\PackageBase\Utility\PackageConfig
{
    protected $name = ProfileLinksServiceProvider::NAME;

    public static function configPath(): string
    {
        return PathsHelpers::config('/profile-links.php');
    }

    public static function tableName($name, $default = null)
    {
        return static::instance()->get('tables.' . $name, $default);
    }

    /**
     * @return string|null
     * @throws Exception
     */
    public static function databaseConnection(): ?string
    {
        return (string)static::instance()->get('database.connection');
    }

    public static function shouldRunMigrations(): bool
    {
        return static::instance()->get('database.migrations', false) !== false;
    }
}
