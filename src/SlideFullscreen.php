<?php

namespace Site\DataObjects;

use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\FieldList;
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
        return new FieldList([
            TextField::create('Title'),
            HTMLEditorField::create('Text'),
            Injector::inst()->create(FileHandleField::class, 'Image', 'Image (2000 x 1333)')
        ]);
    }
}
