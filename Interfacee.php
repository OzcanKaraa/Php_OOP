<?php

interface Ekle {

    public function ekle($ad);

}

interface Listele {
    public function Listele();
}
Class Alt implements Ekle,Listele {

    public $ad;

    public function ekle($ad)
    {
        return $this->ad=$ad;
    }
    public function Listele(){

        echo $this->ad;
    }
}

$isim=new Alt();
$isim->ekle("Ozcan Kara");
$isim->Listele();