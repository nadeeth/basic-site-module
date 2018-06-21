<?php

namespace Site\DataObjects;

use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\FileHandleField;
use SilverStripe\Core\Injector\Injector;

class SlideFullscreen extends DataObject
{
    private static $db = [
        'Title' => 'Varchar(50)',
        'Text' => DBHTMLText::class
    ];

    private static $has_one = [
        'Image' => Image::class,
        'HomePageFullscreen' => 'HomePageFullscreen'
    ];

    private static $table_name = "SlideFullscreen";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab("Root.Main", HTMLEditorField::create('Text'));
        $fields->addFieldToTab("Root.Main", Injector::inst()->create(FileHandleField::class, 'Image', 'Image (2000 x 1333)'));

        return $fields;
    }
}
