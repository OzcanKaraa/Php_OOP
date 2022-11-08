<?php

//Interface kullanimi
interface Olusturma
{
    public function Olusturma($TabloDegeri, $BenzersizKimlik);
}

interface Okuma
{
    public function Okuma($TabloDegeri, $BenzersizKimlik);
}

interface Guncelleme
{

    public function Guncelleme($TabloDegeri, $BenzersizKimlik);
}

interface Silme
{
    public function Silme($TabloDegeri, $BenzersizKimlik);
}

class Test implements Olusturma, Okuma, Guncelleme, Silme
{

    public function Olusturma($TabloDegeri, $BenzersizKimlik)
    {
    }

    public function Okuma($TabloDegeri, $BenzersizKimlik)
    {
    }

    public function Guncelleme($TabloDegeri, $BenzersizKimlik)
    {
    }

    public function Silme($TabloDegeri, $BenzersizKimlik)
    {
    }
}