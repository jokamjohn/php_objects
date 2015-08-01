<?php
/**
 * Created by PhpStorm.
 * User: John Kagga
 * Date: 8/1/2015
 * Time: 9:53 AM
 */
include 'Product.php';
class Soda extends Product{
    //inheriting from the product class
    public $flavor;

    //constructor
    function __construct($name, $price, $desc,$flavor)
    {
        parent ::__construct($name,$price,$desc);
        $this->flavor = $flavor;
    }

    //method
    public function getInfo (){
        return "Product name: ".$this->name. "Flavor".$this->flavor;
    }
}

$soda = new Soda("coca-cola",2500,"Black in color","coke");
echo $soda->getInfo();