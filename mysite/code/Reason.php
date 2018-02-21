<?php

use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class Reason extends DataObject {
    
    private static $has_one = [
        'HomePage' => HomePage::class,
    ];
    
    private static $extensions = [
        Versioned::class,
    ];
    
    private static $versioned_gridfield_extensions = true;
    
    private static $db = [
        'ReasonTitle' => 'Text',
        'Details' => 'Text'
    ];
    
    private static $summary_fields = [
        'ReasonTitle' => 'Reason Title'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldtoTab('Root.Main', TextareaField::create('ReasonTitle','Reason Title'));
        $fields->addFieldtoTab('Root.Main', TextareaField::create('Details','Details Why'));
        
        return $fields;
    }
    
}