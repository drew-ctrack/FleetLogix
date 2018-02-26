<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Versioned\Versioned;
use SilverStripe\Assets\File;


class ProductPage extends Page {
    
    private static $has_one = [
        'ProductHolder' => ProductHolderPage::class,
        'ProductBrochure' => File::class
    ];
    
    private static $has_many = [
        'Descriptions' => ProductDescription::class,
        'Photos' => UnitImage::class,
    ];
    
    private static $extensions = [
        Versioned::class,
    ];
    
    private static $db = [
        'ProductTitle' => 'Varchar'
    ];
    
    private static $owns = [
        'ProductBrochure',
        'Descriptions',
        'Photos'
    ];
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldToTab('Root.ProductInfo', GridField::create('Descriptions', 'Product Information', $this->Descriptions(), GridFieldConfig_RecordEditor::create()));
        $fields->addFieldToTab('Root.Images', GridField::create('Photos', 'Product Images', $this->Photos(), GridFieldConfig_RecordEditor::create()));
        
        $fields->addFieldtoTab('Root.Brochure', $brochure = UploadField::create('ProductBrochure','Brochure: Upload PDF or Image')); 
        $brochure
        ->setFolderName('brochures')
        ->getValidator()->setAllowedExtensions(['pdf', 'png', 'jpeg', 'jpg']);
              
        return $fields;
    }

    
}
