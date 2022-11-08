    <?php

    class Detay{
        public  $isim = "Ozcan";
        public const SOYISIM = "Kara";
        public function Bilgiler() {
            $Meslek = "Yazılımcı";
            $sehir = "Istanbul";
            $Metin = "Meslek: " . $Meslek . "</br>. İli: ". $sehir;
            return $Metin;
        }
  }

    $sonuc = new Detay();
    echo  "Isim Soyisim  : ". $sonuc->isim . " ". Detay::SOYISIM . "</br>" ;