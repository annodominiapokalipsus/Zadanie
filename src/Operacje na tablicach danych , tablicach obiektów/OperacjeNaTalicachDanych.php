<?php

require_once __DIR__ . '../Apple.php';
require_once __DIR__ . '../Cabbage.php';
require_once __DIR__ . '../Orange.php';
require_once __DIR__ . '../Potato.php';
require_once __DIR__ . '../AbstractClass/Fruit.php';


use \Exception;

//1.Utwórz tablicę danych zawierającą listę użytkowników

$users = array('Marek', 'Zosia', 'Stefan');


//2.Wykonaj iterację po elementach tej tablicy dopisując losowy owoc lub warzywo z
//poprzedniego zadania jako wartość.

$apple = new Apple();
$cabbage = Cabbage::getCabbageSingelton();
$potato = new Potato();
$orange = new Orange();

$orange->setType('Orange');

$plants = array($apple, $cabbage, $potato, $orange);

for ($i = 0; $i < count($users); $i++) {

    $drawnPlantIndex = rand(0, 3);

    $plant = $plants[$drawnPlantIndex];

    $users[$users[$i]] = $plant;

    unset($users[$i]);

}

//3.Posortuj alfabetycznie otrzymaną tablicę

ksort($users);

//4.Następnie usuń użytkowników, którzy mają przypisany owoc jabłko klasa „Apple”

foreach ($users as $user => $plant) {

    if (is_a($plant, 'Apple')) {
        unset($users[$user]);
    }
}


//5.Wyświetl listę pozostałych użytkowników w tablicy wraz z owocami jakie posiadają
foreach ($users as $user => $plant) {

    echo $user . ' and his plant which is: ' . $plant->getType() . '<br>';
}