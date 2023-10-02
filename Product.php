<?php
class Product {
    // TODO: Add properties
    private $id, $name, $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method
    private static function getFormattedPrice($price){
        $formatPrice = sprintf("%.2f", $price);
        return $formatPrice;
    }


    // TODO: Add showDetails method
    function showDetails(){

        echo "Product Details:\n - ID: {$this->id}\n - Name: {$this->name}\n - Price: " . self::getFormattedPrice($this->price);

    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();


/*
Expected Output:


Product Details:
- ID: 1
- Name: T-shirt
- Price: $19.99
*/