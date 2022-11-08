<?php
//GECERSIZ KILMA ISLEMI
//Tanimlanmis bir methodun miras ile elde edilen sinifta tekrar tanimlanarak aha onceki islmein gecersiz tanimlanmasidir


class Ekmek {
   protected $kdv;
   public function Kdv($fiyat)
   {
       $this->kdv = 0.08;
       return $this->kdv * $fiyat;
   }
}

Class Mazot extends Ekmek{
    public $kdv;
    public function Kdv($fiyat){
        $this->kdv=0.18;
        return $this->kdv*$fiyat;
    }

}
$ekmek = new Ekmek();
echo "Ekmek KDV ..".$ekmek->Kdv(10);

$mazot = new Mazot();
echo "Ekmek KDV ..".$mazot->Kdv(10);