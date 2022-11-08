<?php

class Animal{

public int $age;
public string $species;
public const LIVE_IN = "Dünya";

public function born() {
echo "$this->species doğdu. <br/>";
}

public function die() {
echo "$this->species öldü. <br/>";
}

public function greet(){
echo "Ben  ". $this->species." türündenim ve ".
$this::LIVE_IN ."'da yaşıyorum <br/>";
}
}

class Bird extends Animal{

//Override species variable
public string $species = "Değiştirilen Kuş";

public function tweet()
{
echo "Cik cik";
}

// Override greet method
public function greet(){
echo "Selamlaşma metodunu ezdim. <br/>";
}

}

$pigeon = new Bird();
$pigeon->born();
$pigeon->greet();
$pigeon->tweet();