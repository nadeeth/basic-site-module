<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;


class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'CopyrightText' => 'HTMLText',
        'FacebookLink' => 'Varchar(500)',
        'TwitterLink' => 'Varchar(500)',
        'GoogleplusLink' => 'Varchar(500)',
        'LinkedinLink' => 'Varchar(500)',
    ];

    private static $has_many = [
        'FooterMenu' => Page::class
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Footer', new HTMLEditorField('CopyrightText', 'Copyright Text'));
        $fields->addFieldToTab('Root.Footer', TextField::create('FacebookLink', 'Facebook Link'));
        $fields->addFieldToTab('Root.Footer', TextField::create('TwitterLink', 'Twitter Link'));
        $fields->addFieldToTab('Root.Footer', TextField::create('GoogleplusLink', 'Googleplus Link'));
        $fields->addFieldToTab('Root.Footer', TextField::create('LinkedinLink', 'Linkedin Link'));


        $fields->addFieldToTab('Root.Footer',
            GridField::create(
                'FooterMenu',
                'Select Pages For Footer Menu',
                $this->owner->FooterMenu(),
                GridFieldConfig_RelationEditor::create()
            )
        );
    }
}
