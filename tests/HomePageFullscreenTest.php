<?php

use SilverStripe\Dev\SapphireTest;

class HomePageFullscreenTest extends SapphireTest
{
    /**
     * Defines the fixture file to use for this test class
     * @var string
     */
    protected static $fixture_file = 'site/tests/fixturesHomePageFullscreen.yml';

    public function testURLGeneration()
    {
        $obj = $this->objFromFixture('HomePageFullscreen', 'page1');
        $this->assertEquals("home-page-fullscreen", $obj->URLSegment);
        $this->assertEquals("Home Page Fullscreen", $obj->Title);
        $this->assertEquals("HomePageFullscreen", $obj->ClassName);
    }
}
