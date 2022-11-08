<?php
interface Selamlama{
    public function dil($ad);
}
Class Turkce implements Selamlama{
    public function dil($ad){
        echo "Merhaba " .$ad;
    }
}
Class Ingilizce implements Selamlama{
    public function dil($ad){
        echo "Hello " .$ad;
    }
}

$tr =new Turkce();
$tr->dil("Ozcan");
$tr =new Ingilizce();
$tr->dil("Ozcan");