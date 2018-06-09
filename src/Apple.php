<?php

require_once __DIR__.'/AbstractClass/Fruit.php';

class Apple extends Fruit
{

    public function __construct()
    {
        $this->type = 'Apple';
    }

    public function getType(){

        return $this->type;
    }

}