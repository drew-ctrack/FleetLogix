<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

class CustomSiteConfig extends DataExtension {
    private static $db = [
        'PhoneNumber' => 'Varchar',
        'Address' => 'Varchar',
        'EmailAddress' => 'Varchar',
        'FacebookLink' => 'Varchar',
        'TwitterLink' => 'Varchar',
        'InstagramLink' => 'Varchar',
        'YouTubeLink' => 'Varchar',
        'LinkedInLink' => 'Varchar',
        'CallToActionHeader' => 'Varchar',
        'CallToActionText' => 'Varchar',
        'CallToActionLink' => 'Varchar'
    ];
    
    public function updateCMSFields(FieldList $fields) {   
        $fields->addFieldsToTab("Root.Footer",TextField::create("PhoneNumber", "Phone Number"));
        $fields->addFieldsToTab("Root.Footer",TextField::create("Address", "Address"));
        $fields->addFieldsToTab("Root.Footer",TextField::create("EmailAddress", "Email Address"));
        
        $fields->addFieldsToTab("Root.Social",TextField::create("FacebookLink", "Facebook Link"));
        $fields->addFieldsToTab("Root.Social",TextField::create("TwitterLink", "Twitter Link")); 
        $fields->addFieldsToTab("Root.Social",TextField::create("InstagramLink", "Instagram Link")); 
        $fields->addFieldsToTab("Root.Social",TextField::create("YouTubeLink", "YouTube Link")); 
        $fields->addFieldsToTab("Root.Social",TextField::create("LinkedInLink", "LinkedIn Link")); 
        
        $fields->addFieldsToTab("Root.CallToAction",TextField::create("CallToActionHeader", "Call to Action Header")); 
        $fields->addFieldsToTab("Root.CallToAction",TextField::create("CallToActionText", "Call to Action Text"));
        $fields->addFieldsToTab("Root.CallToAction",TextField::create("CallToActionLink", "Call to Action Link"));

    }
}
