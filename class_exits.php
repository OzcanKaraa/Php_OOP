<?php

class kurs
{
    public function yaz()
    {
        echo "php";
    }
}

class kurs2 extends kurs
{

}

if (class_exists("kurs2")){
//    echo "Kurs ısmınde sınıf var";
    $a=new kurs();

}else{
    echo "Sınıf ısmı bulunamadı";
}