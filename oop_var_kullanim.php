<?php
//Standart degisken kullanmak için var kullanılır.
class Deneme{
    var $isim = "ozcan";
    const SOYISIM = "Kara";
}

$Islem = new Deneme;
echo $Islem->isim;
echo Deneme::SOYISIM;