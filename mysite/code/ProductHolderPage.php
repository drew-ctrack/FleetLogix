<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class ProductHolderPage extends Page {

    private static $has_many = [
        'ProductPage' => ProductPage::class,
    ];
    
    private static $has_one = [
        'LinkImage' => Image::class
    ];
    
    private static $owns = [
        'ProductPage'
    ];
    
    private static $allowed_children = [
        'ProductPage'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldToTab('Root.Products', GridField::create('Products', 'Products of this type', $this->ProductPage(), GridFieldConfig_RecordEditor::create()));
        
        $fields->addFieldtoTab('Root.Image', $linkImage = UploadField::create('LinkImage','Image to appear in links'));
        $linkImage
        ->setFolderName('link-images')
        ->getValidator()->setAllowedExtensions(['png', 'jpeg', 'jpg']);
        
        return $fields;
    }
    
}
