<?php
abstract class A
{
    protected $ogrenci_no;
    public $isim;
    abstract public function soyad();
}
class B extends A
{
    function __construct($isim)
    {
        $this->isim = $isim;
    }

    public function soyad()
    {
        echo "Isim Soyisim: " . $this->isim;
    }
}

$nesne = new B("Ozcan Kara");
$nesne->soyad();