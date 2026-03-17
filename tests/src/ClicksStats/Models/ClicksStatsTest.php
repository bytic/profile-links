<?php

namespace ByTIC\ProfileLinks\Tests\ClicksStats\Models;

use ByTIC\ProfileLinks\ClicksStats\Dto\ClicksStatsTable;
use ByTIC\ProfileLinks\ClicksStats\Models\ClicksStat;
use ByTIC\ProfileLinks\ClicksStats\Models\ClicksStats;
use PHPUnit\Framework\TestCase;

class ClicksStatsTest extends TestCase
{
    public function test_table_constant()
    {
        self::assertEquals(ClicksStatsTable::NAME, ClicksStats::TABLE);
    }

    public function test_instantiation()
    {
        $repository = new ClicksStats();
        self::assertInstanceOf(ClicksStats::class, $repository);
    }

    public function test_new_record_has_trait_methods()
    {
        $stat = new ClicksStat();
        $stat->setUrl('https://example.com');
        $stat->setReferer('https://referrer.com');
        $stat->setDate('2026-03-17');
        $stat->setClicks(5);

        self::assertEquals('https://example.com', $stat->getUrl());
        self::assertEquals('https://referrer.com', $stat->getReferer());
        self::assertEquals('2026-03-17', $stat->getDate());
        self::assertEquals(5, $stat->getClicks());
    }

    public function test_increment_clicks()
    {
        $stat = new ClicksStat();
        $stat->setClicks(3);
        $stat->incrementClicks();

        self::assertEquals(4, $stat->getClicks());

        $stat->incrementClicks(5);
        self::assertEquals(9, $stat->getClicks());
    }
}
