<?php

namespace ByTIC\ProfileLinks\Tests\ClicksLogs\Models;

use ByTIC\ProfileLinks\ClicksLogs\Dto\ClicksLogsTable;
use ByTIC\ProfileLinks\ClicksLogs\Models\ClicksLogs;
use PHPUnit\Framework\TestCase;

class ClicksLogsTest extends TestCase
{
    public function test_table_constant()
    {
        self::assertEquals(ClicksLogsTable::NAME, ClicksLogs::TABLE);
    }

    public function test_instantiation()
    {
        $repository = new ClicksLogs();
        self::assertInstanceOf(ClicksLogs::class, $repository);
    }

    public function test_new_record_has_trait_methods()
    {
        $log = new \ByTIC\ProfileLinks\ClicksLogs\Models\ClicksLog();
        $log->setUrl('https://example.com');
        $log->setReferer('https://referrer.com');
        $log->setUserAgent('Mozilla/5.0');
        $log->setIp('127.0.0.1');

        self::assertEquals('https://example.com', $log->getUrl());
        self::assertEquals('https://referrer.com', $log->getReferer());
        self::assertEquals('Mozilla/5.0', $log->getUserAgent());
        self::assertEquals('127.0.0.1', $log->getIp());
    }
}
