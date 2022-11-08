<?php
class Selam{
    public function merhaba($isim)
    {
        echo "selam".$isim."<br>";
    }
}
class Almanca extends Selam {
    public function merhaba($isim)
    {
      echo "Halo" .$isim."<br>";
    }
}
class Ingilizce extends Selam {
    public function merhaba($isim)
    {
       echo "hello".$isim."<br>";
    }
}
class Fransizca extends Selam{
    public function merhaba($isim)
    {
       echo "hola".$isim."<br>";
    }
}
$turkce = new Selam();
$turkce->merhaba("Ali");

$almanca = new Selam();
$almanca->merhaba("Ali");

$ingilizce = new Selam();
$ingilizce->merhaba("Ali");

$Fransızca = new Selam();
$Fransızca->merhaba("Ali");