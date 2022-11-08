<?php

class Kitap
{
    //Özellik
    public $ad, $yazar, $fiyat,$turu;
    //Method
    public function insert($ad, $yazar, $fiyat,$turu)
    {  //parametre
        $this->ad = $ad;
        $this->yazar = $yazar;
        $this->fiyat = $fiyat;
        $this->turu = $turu;
    }

    public function listele()
    {
        echo "Kitap Adı : " .$this->ad;  `</br>`;

        echo "Kitap yazar : " .$this->yazar; `</br>`;

        echo "Kitap fiyat  : " .$this->fiyat; `</br>`;

        echo "Kitap türü : " .$this->turu; `</br>`;

    }
}


$php = new Kitap();
$php->insert("Şu Çılgın Türkler","Turgut Özakman","130","Tarih");
$php->listele();