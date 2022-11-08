<?php
trait KisiBir{
    public function isim(){
        $isim = "Ozcan" ;
        return $isim;
    }
    trait KisiIki {
        public function soyisim(){
            $soyisim = "Kara";
            return $soyisim;
        }
}
class Deneme{
        use KisiBir,KisiIki {KisiBir::isim insteadof KisiIki:soyisim}
}