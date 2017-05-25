<?php

///*********物件導向


class bike{
    private $speed = 1;

    function upspeed(){
        $this->speed=
        ($this->speed<1)?1:$this->speed*1.2;
    }

    function downspeed(){
        if($this->speed<2){
            $this->speed = $this->speed*3;
        }




    }


    function getspeed(){
        return $this->speed;

    }
}

$mybike = new bike();
$urbike = new bike();

$mybike->upspeed();$mybike->upspeed();$mybike->upspeed();
$urbike->downspeed();
echo "{$urbike->getspeed()}";

