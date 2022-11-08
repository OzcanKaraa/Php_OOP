<?php
abstract class selam{
    public function merhaba ($isim){
        echo "Merhaba" .$isim;
    }

    public function gulegule ($isim)
    {
        echo "Gule Gule" . $isim;
    }
}

class Selam2 extends Selam {
}

$selamla = new Selam2();
$selamla ->merhaba("abc");
$selamla ->gulegule("ssss");