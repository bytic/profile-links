<?php

namespace ByTIC\ProfileLinks\Tests\Links\Models;

use ByTIC\ProfileLinks\Links\Models\ProfileLinks;
use ByTIC\ProfileLinks\Types\Website;
use PHPUnit\Framework\TestCase;

class ProfileLinksTraitTest extends TestCase
{
    public function test_getTypes()
    {
        $repository = new ProfileLinks();
        $types = $repository->getTypes();

        self::assertCount(5, $types);

        $website = $types[Website::NAME];
        self::assertInstanceOf(Website::class, $website);
    }
}
