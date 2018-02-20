<?php

use SilverStripe\Forms\TextField;

class HomePage extends Page {

    private static $db = [
        'HeadingText' => 'Text',
        'HeadingSubtext' => 'Text'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldtoTab('Root.Main', TextField::create('HeadingText','Header Text'), 'Content');
        $fields->addFieldtoTab('Root.Main', TextField::create('HeadingSubtext','Header Subtext'), 'Content');
        
        
        return $fields;
    }
  
    
}



