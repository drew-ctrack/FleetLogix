<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;

class UnitImage extends DataObject {
    
    private static $has_one = [
        'ProductPage' => ProductPage::class,
        'UploadImage' => Image::class,
    ];    
    
    private static $db = [
        'ImageName' => 'Text'
    ];
   
    
    private static $extensions = [
        Versioned::class,
    ];
    
    private static $summary_fields = [
        'ImageName' => 'Image'
    ];
    
    private static $versioned_gridfield_extensions = true;
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldtoTab('Root.Main', TextField::create('ImageName','Name of Image'));
        
        $fields->addFieldtoTab('Root.Main', $images = UploadField::create('UploadImage','Images: Upload PDF or Image'));
        $images
        ->setFolderName('product-photos')
        ->getValidator()->setAllowedExtensions(['pdf', 'png', 'jpeg', 'jpg', 'JPG']);
          
        return $fields;
    }
    
}