<?php

use SilverStripe\Dev\FunctionalTest;

class SitePageControllerTest extends FunctionalTest
{

    public function testViewSitePage()
    {
        $page = $this->get('site-page');

        // Page should load..
        $this->assertEquals(200, $page->getStatusCode());
    }
}
