<?php

use SilverStripe\CMS\Model\SiteTree;
use Site\DataObjects\SlideFullscreen;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\ORM\FieldType\DBBoolean;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FileHandleField;
use SilverStripe\Core\Injector\Injector;

class HomePageFullscreen extends SitePage
{
    private static $db = [
        'Slider' => DBBoolean::class
    ];

    private static $has_one = [
        'Background' => Image::class
    ];

    private static $has_many = [
        'Slides' => SlideFullscreen::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', CheckboxField::create('Slider', 'Slider ?'));
        $fields->addFieldToTab('Root.Main', Injector::inst()->create(FileHandleField::class,
                        'Background', 'Background Image (2000 x 1333)'));

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
