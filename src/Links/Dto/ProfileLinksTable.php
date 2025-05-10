<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\Links\Dto;

/**
 *
 */
class ProfileLinksTable
{
    public const NAME = 'profile-links';

    public const COLS = [
        self::COL_ID,
        self::COL_SUBJECT,
        self::COL_SUBJECT_ID,
        self::COL_NAME,
        self::COL_ICON,
        self::COL_URL,
        self::COL_TYPE,
        self::COL_MODIFIED,
        self::COL_CREATED,
    ];

    public const COL_ID = 'id';
    public const COL_SUBJECT = 'subject';
    public const COL_SUBJECT_ID = 'subject_id';
    public const COL_NAME = 'name';
    public const COL_ICON = 'icon';
    public const COL_URL = 'url';
    public const COL_TYPE = 'type';
    public const COL_MODIFIED = 'modified';
    public const COL_CREATED = 'created';
}

