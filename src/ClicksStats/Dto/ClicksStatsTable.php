<?php

declare(strict_types=1);

namespace ByTIC\ProfileLinks\ClicksStats\Dto;

/**
 *
 */
class ClicksStatsTable
{
    public const NAME = 'profile-links-clicks-stats';

    public const COLS = [
        self::COL_ID,
        self::COL_URL,
        self::COL_REFERER,
        self::COL_DATE,
        self::COL_CLICKS,
    ];

    public const COL_ID = 'id';
    public const COL_URL = 'url';
    public const COL_REFERER = 'referer';
    public const COL_DATE = 'date';
    public const COL_CLICKS = 'clicks';
}
