<?php

//Soyut Sinif Olusturduk
abstract class Tema
{
    abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri);

    abstract public function BodyAlani($icerik);

    abstract public function FooterAlani($CopyMetni);
}
//Ana Sinif Olusturma
//Abstract ile olusturulan methotlari yeni türetilen sınıfa dahil etme işlemi
//
class HeaderAlan extends Tema{

 public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri){}
    public function BodyAlani($icerik){}
    public function FooterAlani($CopyMetni){}
    }

