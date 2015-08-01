<?php
/**
 * Created by John Kagga.
 * User: DELL
 * Date: 8/1/2015
 * Time: 11:34 AM
 */

/*
 * return method_exists(object, method_name);
 * e.g
 * return method_exists($soda,getPrice);
 * returns a boolean
*/

//is_subclass_of(object,class_name);
//e.g

    class Product1 {
        //parent class
    }

    class Soda1 extends Product1
    {
        //child of product1
    }

    $soda = new Soda1();
    is_subclass_of($soda,"Product1");
//returns a boolean
