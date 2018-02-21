<?php

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class FAQPage extends Page {
    
    private static $has_many = [
        'FAQ' => FAQ::class,
    ];
    
    private static $owns = [
        'FAQ'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldToTab('Root.Questions', GridField::create('Questions', 'Frequently Asked Questions', $this->FAQ(), GridFieldConfig_RecordEditor::create()));
        
        return $fields;
    }
    
}
