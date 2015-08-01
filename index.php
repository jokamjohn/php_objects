<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 8/1/2015
 * Time: 9:52 AM
 */
include 'Product.php';
include 'Soda.php';
//new instance of the product object
$product = new Product("shirt",20,"short-selves");
echo $product->getInfo();
echo "<br><br><br>";
//new soda object

$soda = new Soda("coca-cola",2500,"Black in color","coke");
echo $soda->getInfo();