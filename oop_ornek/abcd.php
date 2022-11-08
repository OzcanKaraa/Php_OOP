<?php

class Animal{
public int $age;
public string $species;
public const LIVE_IN = "Dünya";

public function born(){
echo "Hayvan doğdu. <br/>";
}

public function die() {
echo "Hayvan öldü. <br/>";
}
}

$bird = new Animal();
$bird->born();
$bird->species = "Kuş";
$bird->age =  1;
$bird->die();
echo  "Kuşlar ". $bird::LIVE_IN . "'da yaşarlar <br/>";

$dog = new Animal();
$dog->born();
$dog->species = "Köpek";
$dog->age = 3;
$dog->die();
echo  "Köpekler ". $bird::LIVE_IN . "'da yaşarlar <br/>";