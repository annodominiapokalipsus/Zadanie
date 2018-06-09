<?php

require_once __DIR__ . '/../Interface/PlantInterface.php';



abstract class Plant implements PlantInterface
{

    protected $type = 'other';


    abstract public function getType();
}