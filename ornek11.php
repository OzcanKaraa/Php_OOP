<?php
class Deneme{
    public $ad = "Özcan";
    public $soyad = "Kara";

    public function bilgilerim() {
    $bilgilerim =   "demo";
    return $bilgilerim;
    }
}
$data= new Deneme();
echo $data->ad();
echo $data->soyisim();
echo $data->bilgilerim();
