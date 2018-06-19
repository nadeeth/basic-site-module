<?php

use SilverStripe\Dev\SapphireTest;

class SitePageTest extends SapphireTest
{
    /**
     * Defines the fixture file to use for this test class
     * @var string
     */
    protected static $fixture_file = 'site/tests/fixturesSitePage.yml';

    public function testURLGeneration()
    {
        $obj = $this->objFromFixture('SitePage', 'page1');
        $this->assertEquals("page-one", $obj->URLSegment);
        $this->assertEquals("Page One", $obj->Title);
        $this->assertEquals("SitePage", $obj->ClassName);
    }
}
