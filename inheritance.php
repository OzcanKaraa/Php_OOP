<?php
class Fruit
{
    public $name;
    public $color;
   public function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    public function intro(){
       echo "{this->name} {this->color}";
    }
}
class Cherry extends Fruit {
    public function message(){
            echo "Kiraz kırmızı renklidir.";
    }
}
$cherry = new Cherry ("Cherry","red");
$cherry->message();
$cherry->intro();

