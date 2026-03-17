<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksLogs\Dto;

/**
 *
 */
class ClicksLogsTable
{
    public const NAME = 'profile-links-clicks-logs';

    public const COLS = [
        self::COL_ID,
        self::COL_URL,
        self::COL_REFERER,
        self::COL_USERAGENT,
        self::COL_IP,
        self::COL_CREATED_AT,
    ];

    public const COL_ID = 'id';
    public const COL_URL = 'url';
    public const COL_REFERER = 'referer';
    public const COL_USERAGENT = 'useragent';
    public const COL_IP = 'ip';
    public const COL_CREATED_AT = 'created_at';
}
