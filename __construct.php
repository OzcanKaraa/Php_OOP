<?php
//__Construct :  Belirtilecek olan sınıfa ,Yapıcı metod tanımlamak için kullanılır.
//__destruct : Belirtilecek olan sınıfa ,Yıkıcı  metod tanımlamak için kullanılır.

class Deneme{
    public $isim = "Ozcan";
    public $soyisim = "Kara";

    public function yaz(){
        $metin = "Php OOp yapısı"; //metodun icerisindeki degisken
        return $metin;
    }

    public function __construct(){
    echo "Sınıf çalıştı Yapıcı metod devreye gırdı"."</br>" ;
    }
    public function __destruct()
    {
        echo "Sınıf içerisindeki tüm özellikleri Yık yok et";
    }
}

$IslemYap = new Deneme;
echo $IslemYap->yaz();
echo $IslemYap->isim." ".$IslemYap->soyisim." ".$IslemYap->yaz(). "</br>";

