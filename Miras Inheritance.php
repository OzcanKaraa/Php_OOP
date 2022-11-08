<?php

class Kitap
{
    //Özellik
    public $ad, $yazar, $fiyat;
    //Method
    public function insert($ad, $yazar, $fiyat)
    {  //parametre
        $this->ad = $ad;
        $this->yazar = $yazar;
        $this->fiyat = $fiyat;
    }

    public function listele()
    {
        echo `Kitap Adı` .$this->ad;
        `<br>`;
        echo `Kitap yazar` .$this->yazar;
        `<br>`;
        echo `Kitap fiyat` .$this->fiyat;
        `<br>`;
        //Bir sinifta Nesne olusturmak icin NEW anahtar kelimesi kullanilir
//Kitap adinda Nesne olusturuldu.

    }
}

Class Yazilim extends Kitap {
    public function __construct(){
        echo "Yazılım Kıtapları";
    }
}

Class Bilimkurgu extends Kitap {
    public function __construct(){
        echo "Bilim Kurgu Kıtapları";
    }
}


//
$php = new Yazilim();
$php->insert("A","B","10");
$php->listele();

$php = new Bilimkurgu();
$php->insert("A","B","10");
$php->listele();