<?php
abstract class A
{
    public $isim;
    abstract public function soyad();
}
class B extends A
{
    function __construct($isim)
    {
        $this->isim = $isim;
    }

    public function soyad(){
        echo "Degerler: ".$this->isim;
    }
}

$nesne = new B("Ozcan Kara");
$nesne->soyad();



