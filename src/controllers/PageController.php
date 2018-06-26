<?php

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\View\Requirements;

class PageController extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * [
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * ];
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = [];

    protected function init()
    {
        parent::init();

        //CSS
        Requirements::css("site/css/bootstrap.min.css");
        Requirements::css("site/css/styles.css");
        Requirements::css("site/fonts/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.min.css");

        //JavaScript
        Requirements::javascript("site/javascript/jquery-3.2.1.slim.min.js");
        Requirements::javascript("site/javascript/popper.min.js");
        Requirements::javascript("site/javascript/bootstrap.min.js");
        Requirements::javascript("site/javascript/app.js");
    }
}
