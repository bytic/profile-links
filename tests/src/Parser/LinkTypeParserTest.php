<?php

namespace ByTIC\ProfileLinks\Tests\Parser;

use ByTIC\ProfileLinks\Links\Models\ProfileLink;
use ByTIC\ProfileLinks\Links\Models\ProfileLinks;
use ByTIC\ProfileLinks\Parser\LinkTypeParser;
use ByTIC\ProfileLinks\Tests\TestCase;
use ByTIC\ProfileLinks\Types\AbstractType;
use ByTIC\ProfileLinks\Types\Facebook;
use ByTIC\ProfileLinks\Types\Instagram;
use ByTIC\ProfileLinks\Types\Linkedin;
use ByTIC\ProfileLinks\Types\Strava;
use ByTIC\ProfileLinks\Types\Website;
use Nip\Records\Locator\ModelLocator;

class LinkTypeParserTest extends TestCase
{
    /**
     * @param $url
     * @param $typeName
     * @return void
     * @throws \Exception
     * @dataProvider data_parse
     */
    public function test_parse($url, $typeName)
    {
        $repository = new ProfileLinks();
        ModelLocator::set(ProfileLinks::class, $repository);

        $link = new ProfileLink();
        $link->setUrl($url);
        LinkTypeParser::parseType($link);

        $type = $link->getType();
        self::assertNotEmpty($type);
        self::assertInstanceOf(AbstractType::class, $type);
        self::assertEquals($typeName, $type->getName());
    }

    public static function data_parse(): array
    {
        return [
            ['https://www.facebook.com/Bytic', Facebook::NAME],
            ['https://instagram.com/bytic', Instagram::NAME],
            ['https://www.linkedin.com/bytic', Linkedin::NAME],
            ['https://www.strava.com/group/Bytic', Strava::NAME],
            ['https://www.bytic.com/', Website::NAME],
        ];
    }
}
