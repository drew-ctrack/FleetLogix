<?php

use SilverStripe\Assets\Image;

class ProductImage extends Image {
    
    private static $has_one = [
        'ProductPage' => ProductPage::class,
    ];
    
}