<?php

require_once __DIR__.'/AbstractClass/Fruit.php';

class Orange extends Fruit
{

    public function setType($type)
    {
        if (trim(ucfirst(strtolower($type))) !== 'Orange') {
            $type = 'Orange';
        }

        $this->type = $type;
    }

    public function getType(){

        return $this->type;
    }

    public static function getJuice(){

        return 'orange juice';
    }

}