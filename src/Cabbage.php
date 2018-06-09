<?php

require_once __DIR__.'/AbstractClass/Vegetable.php';

class Cabbage extends Vegetable
{

    private function __construct($type)
    {
        $this->type = $type;
    }

    public static function getCabbageSingelton()
    {

        $cabbage = new Cabbage('Cabbage');

        return $cabbage;

    }

    public function getType(){

        return $this->type;
    }

}