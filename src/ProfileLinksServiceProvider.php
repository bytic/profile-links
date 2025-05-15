<?php

namespace ByTIC\ProfileLinks;

use ByTIC\PackageBase\BaseBootableServiceProvider;
use ByTIC\ProfileLinks\Utility\PackageConfig;
use ByTIC\ProfileLinks\Utility\PathsHelpers;

/**
 * Class AuditServiceProvider
 * @package ByTIC\Audit
 */
class ProfileLinksServiceProvider extends BaseBootableServiceProvider
{
    public const NAME = 'profile-links';

    /**
     * @inheritdoc
     */
    public function register()
    {
    }

    public function migrations(): ?string
    {
        if (PackageConfig::shouldRunMigrations()) {
            return PathsHelpers::migrations();
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function provides()
    {
        return [
        ];
    }

    protected function translationsPath(): string
    {
        return PathsHelpers::lang();
    }
}
