<?php

use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class FAQ extends DataObject {
    
    private static $has_one = [
        'QuestionPage' => FAQPage::class,
    ];
    
    private static $extensions = [
        Versioned::class,
    ];
    
    private static $versioned_gridfield_extensions = true;
    
    private static $db = [
        'Question' => 'Text',
        'Answer' => 'Text'
    ];
    
    private static $summary_fields = [
        'Question' => 'Question Title'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldtoTab('Root.Main', TextareaField::create('Question','Question'));
        $fields->addFieldtoTab('Root.Main', TextareaField::create('Answer','Answer'));
                
        return $fields;
    }
    
}