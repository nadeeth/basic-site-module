<?php

use SilverStripe\Dev\FunctionalTest;

class HomePageFullscreenControllerTest extends FunctionalTest
{

    public function testViewSitePage()
    {
        $page = $this->get('home-page-fullscreen?stage=Stage');
        $this->assertEquals(200, $page->getStatusCode());
    }
}
