<?php

use SilverStripe\Forms\TextField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class HomePage extends Page {
    
    private static $has_many = [
        'Reasons' => Reason::class,
    ];
    
    private static $owns = [
        'Reasons'
    ];
    
    private static $db = [
        'HeadingText' => 'Text',
        'HeadingSubtext' => 'Text'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldtoTab('Root.Main', TextField::create('HeadingText','Header Text'), 'Content');
        $fields->addFieldtoTab('Root.Main', TextField::create('HeadingSubtext','Header Subtext'), 'Content');
        
        $fields->addFieldToTab('Root.Reasons', GridField::create('Reasons', 'Why FleetLogix?', $this->Reasons(), GridFieldConfig_RecordEditor::create()));
        
        
        return $fields;
    }
  
    
}



