<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Assets\Image;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\Forms\FileHandleField;
use SilverStripe\Core\Injector\Injector;

class SitePage extends Page
{
    private static $db = [];

    private static $has_one = [
        'Banner' => Image::class,
        'SiteConfig' => SiteConfig::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', Injector::inst()->create(FileHandleField::class,
                        'Banner', 'Banner Image (2000 x 280)'));

        return $fields;
    }
}
