<?php

use SilverStripe\Dev\FunctionalTest;

class SitePageControllerTest extends FunctionalTest
{
    protected static $fixture_file = 'site/tests/fixturesSitePage.yml';

    public function testViewSitePage()
    {
        $obj = $this->objFromFixture('SitePage', 'page1');
        $page = $this->get('page-one?stage=Stage');
        $this->assertEquals(200, $page->getStatusCode());
    }
}
