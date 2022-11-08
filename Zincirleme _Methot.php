<?php
class Kitap{
    public $ad;
    public $yazar;
    public $fiyat;
    protected $yayinevi;

    public  function ad($ad){
        $this->ad=$ad;
        return $this;
    }

    public  function yazar($yazar){
        $this->yazar=$yazar;
        return $this;
    }

    public  function fiyat($fiyat){
        $this->fiyat=$fiyat;
        return $this;
    }
    public  function yayinevi($yayinevi){
        $this->yayinevi=$yayinevi;
        return $this;
    }

    public function listele(){
        echo $this->ad." ".$this->yazar." ".$this->fiyat." ".$this->yayinevi;
    }
}

$php=new Kitap();
//$php->ad("php");
//$php->yazar("Emrah Yuksel");
//$php->fiyat(100);
//$php->yayinevi("Kara Kedi");
//$php->Listele();


$php->ad("php")
->yazar("Emrah Yuksel")
->fiyat(100)
->yayinevi("Kara Kedi")
->Listele();