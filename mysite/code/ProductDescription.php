<?php

use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class ProductDescription extends DataObject {
    
    private static $has_one = [
        'ProductPage' => ProductPage::class,
    ];
    
    private static $extensions = [
        Versioned::class,
    ];
    
    private static $versioned_gridfield_extensions = true;
    
    private static $db = [
        'InfoTitle' => 'Text',
        'InfoDetails' => 'Text'
    ];
    
    private static $summary_fields = [
        'InfoTitle' => 'Info Title'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldtoTab('Root.Main', TextareaField::create('InfoTitle','Title of the Information Section'));
        $fields->addFieldtoTab('Root.Main', TextareaField::create('InfoDetails','Section Details'));

        
        return $fields;
    }
    
}