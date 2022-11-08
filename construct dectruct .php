<?php
class KurucuYikici{

    public function __construct()
    {
        //SINIF CAGRILDIGINDA DEVRIYE GIREREK TANIMLANAN ISLEMLERI GERCEKLESTIRIR
        //PARAMETRE ALARAKTA ISLEM YAPABILIR
        //VERI TABANI BAGLANTISI ICIN
        echo "Basladi...";

    }

    public  function __destruct()
    {
//ANAHTAR KELIMESIYLE TANIMLANDIKTAN SONRA SINIFIN ISLEMI BITTIGI ANDA DEVRIYE GIREN ISLEMLERI GERCEKLESTIRIR
        echo "BITTI...";
    }
}
$islem = new KurucuYikici();