<?php

require_once __DIR__.'/AbstractClass/Vegetable.php';


class Potato extends Vegetable
{

    public function __construct()
    {
        $this->type = 'Potato';
    }


    public function getType(){

        return $this->type;
    }


}