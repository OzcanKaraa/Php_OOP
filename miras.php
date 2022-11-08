<?php

class Personel
{
    public $ad;
    public $soyad;

    public function bilgiler()
    {
        echo $this->ad . "" . $this->soyad . "<br>";
    }
}
class unvan extends personel
{
    public $unvan;
    public function unvanYaz()
    {
        echo "Unvan : " . $this->unvan;
    }
}

$unvan = new unvan();
$unvan->ad = "Ozcan";
$unvan->soyad = "Kara";
$unvan->unvan = "Yazılımcı";
$unvan->bilgiler();