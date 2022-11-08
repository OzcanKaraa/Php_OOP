    <?php

    class Deneme
    {
        public function Tanim($ParametreIcerigi)
        {
                echo $ParametreIcerigi;
        }
    }

    class Test extends Deneme
    {
    }
    $Sonuc= new Test();
    $Sonuc->Tanim("Özcan Kara");