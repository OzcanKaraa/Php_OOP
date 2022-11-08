<?php

class Deneme
{
    public function Egitim(){
        $sonuc =  "Php OOP YAPISI";
        return $sonuc;
    }
}

$Nesne = new Deneme();
$a = $Nesne->Egitim();
echo $a;

