<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class CustomSiteConfig extends DataExtension {
    private static $db = [
        'PhoneNumber' => 'Varchar',
        'Address' => 'Varchar',
        'EmailAddress' => 'Varchar'
    ];
    
    public function updateCMSFields(FieldList $fields) {   
        $fields->addFieldsToTab("Root.Footer",TextField::create("PhoneNumber", "Phone Number"));
        $fields->addFieldsToTab("Root.Footer",TextField::create("Address", "Address"));
        $fields->addFieldsToTab("Root.Footer",TextField::create("EmailAddress", "Email Address"));    
    }
}
