<?php

//Personel soyut sinifi olusturdum
//Personel ıcerısndekı ozellıkler vısıbılıtyler dıger sınıflarda kullanılmak zorundadır.
abstract class Personel {
    protected $maas;
    abstract public function pozisyon();
}
//Miras Kalitim yoluyla Isci sinifina aktarildıgında tum degerler kullanılması gerekıyor.
class Isci extends Personel{
    function __construct($maas){
        $this->maas=$maas;
    }
    public function pozisyon()
    {
       return "Pozisyon : İşçi , maaş:" .$this->maas;
    }
}
//Patron sınıfı Personel sınıfını ınherıtance extends ederek yenı sınıf turettım.
class Patron extends Personel{
    function __construct($maas){
        $this->maas=$maas;
    }
    public function pozisyon()
    {
        return "Pozisyon : İşçi , maaş:" .$this->maas;
    }
}
//Sııflara erısmek ıcın
//calısan adında nesne urettım ıscı sınıfına gore deger verdım ve pozısyon methodunu cagırdım.
$calisan = new Isci("1000 TL");
echo $calisan->pozisyon()."<br>";
