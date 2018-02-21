<?php

use SilverStripe\Versioned\Versioned;

class ProductPage extends Page {
    
    private static $has_one = [
        'ProductHolder' => ProductHolderPage::class,
    ];
    
    private static $extensions = [
        Versioned::class,
    ];
    

    
}
