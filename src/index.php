<?php

require_once __DIR__ . '/Apple.php';
require_once __DIR__ . '/Cabbage.php';
require_once __DIR__ . '/Orange.php';
require_once __DIR__ . '/Potato.php';
require_once __DIR__ . '/AbstractClass/Fruit.php';


$apple = new Apple();
$cabbage = Cabbage::getCabbageSingelton();
$potato = new Potato();


Orange::getJuice();



function checkObject(Fruit $obj) {

    return $obj->getType();
}


/*
 *
 * Pytania:
 *
 * 1) Roznica miedzy public, protected oraz private
 *
 * zmienne oraz funkcje public sa dostepne w kazdym miejscu;
 *
 * protected sa dostepne w danej klasie oraz wszystkich klasach po nich dziedziczacych.
 * W naszym przykladzie jako ze zmienna type w klasie abstrakcyjnej Plant jest wlasnie
 * protected wszystkie pozostale klasy maja do niej dostep.
 *
 * private: zmienne oraz funkcje sa dostepne tylko w obrebie danej klasy
 *
 *
 * 2) Dlaczego brak metody getType w klasie Fruit powoduje blad?
 *
 * Brak metody getType w klasie Fruit nie powoduje bledu. Klasa fruit implementuje interface PlantInterface,
 * ktory wymusza implementacje metod getFruit na klasach go implementujacych. Jednakze jako ze klasa Fruit jest klasa
 * abstrakcyjna nie musi ona implementowac metod interfejsow, ktore ona sama implementuje.
 *
 * 3) Klasa abstrakcyjna:
 *
 * Klasy abstrakcyjnej nie  mozna zainicjowac. STanowi ona wyzszy poziom abstrakcji w projektowaniu obiektowym.
 * Zawiera zmienne oraz metody, ktore beda wspolne dla klas po niej dziedziczacych. Jezeli kilka klas zawiera
 * takie same funkcjonalnosci, mozemy wtedy stworzyc klase abstrakcyjna. Do niej wlasnie trafia te wspolne
 * elementy. Klasy dziedziczace beda mialy do nich dostep a same beda wykonywaly juz badziej unikatowe zadania.
 *
 * 4) jezeli do funkcji przekazemy np. Potato dostaniemy Fatal errora. Do funkcji trafil obiekt, ktory nie implementuje
 * wymaganego interfejsu
 *
 *
 *
 * 5) walidacji mozna dokonac juz wewnatrz metody:
 */


function checkObjectV2($obj) {

    if (!$obj instanceof Fruit) {
        throw new InvalidArgumentException('Invalid object passed to function. The correct one has to implement
        Fruit interface');
    }

    return $obj->getType();
}


try {
    checkObjectV2($potato);
} catch (InvalidArgumentException $ex) {
    echo $ex->getMessage();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



