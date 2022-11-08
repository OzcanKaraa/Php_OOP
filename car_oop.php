<?php
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}
class Audi extends Car {
    public function intro() : string {
        return " $this->name!";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "$this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return " $this->name!";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>