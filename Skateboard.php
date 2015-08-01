<?php
/**
 * Created by PhpStorm.
 * User: John Kagga
 * Date: 8/1/2015
 * Time: 11:20 AM
 */

class Skateboard implements Rideable {
    public function howToRide (){
        $steps = array();
        $steps[] = "Balance your foot foot on the board";
        $steps[] = "Kick,then push with the other foot";
        $steps[] = "Don`t fall down";
        return $steps;
    }

}