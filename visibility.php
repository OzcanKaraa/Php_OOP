<?php

//public her yerden erisilebilir
//private Sadece tanimladigi sinid ixerisnden erililebilir

//protected Tanimlandigi sinif icerisinden yada miras alma yoluyla erisilebilir


class Kitap
{
    //Özellik
    public $ad="Php";
    private  $fiyat=55;
    protected $yazar="Emrah yuksel";
    //Method
}

class Yazilim extends Kitap{
    public function listele()
    {
        echo `Kitap Adı` . $this->ad;
        `<br>`;
        echo `Kitap yazar` . $this->yazar;
        `<br>`;
        echo `Kitap fiyat` . $this->fiyat;
        `<br>`;

    }
}

class Bilimkurgu extends Kitap
{
    public function __construct()
    {
        echo "Bilim Kurgu Kıtapları";
    }
}

$php = new Yazilim();
$php->listele();
