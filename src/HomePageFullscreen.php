<?php

use SilverStripe\CMS\Model\SiteTree;
use Site\DataObjects\SlideFullscreen;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;

class HomePageFullscreen extends SitePage
{
    private static $db = [];

    private static $has_one = [];

    private static $has_many = [
        'Slides' => SlideFullscreen::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Slides',
            GridField::create(
                'Slides',
                'Slides',
                $this->Slides(),
                GridFieldConfig_RelationEditor::create()
            )
        );

        return $fields;
    }
}
