<?php
/**
 * Created by PhpStorm.
 * User: John Kagga
 * Date: 8/1/2015
 * Time: 9:46 AM
 */

class Product {
    public $name = 'default_name';
    public $price = 0;
    public $desc = "default_description";

    //static property
    public static $manufacturer = 'default_maker';

    //constructor
    function __construct($name, $price, $desc)
    {
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
    }

    //method
    public function getInfo (){
        return "Product name: ".$this->name;
    }

    public function maker(){
        //$this and -> cannot be used on static methods
        return self::$manufacturer;
    }

}

    $product = new Product("shirt",20,"short-selves");
    echo $product->getInfo();
    echo '<br><br><br>';
    //using the method to get the maker
    echo $product->maker();
    //or use :: to access the method, property
    echo '<br><br><br>';
    echo $product::$manufacturer;