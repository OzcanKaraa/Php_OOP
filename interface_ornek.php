<?php
interface CRUD{
    public function Olusturma($TabloDegeri ,$BenzersizKimlik);
    public function Yazma($TabloDegeri ,$BenzersizKimlik);
    public function Duzenleme($TabloDegeri ,$BenzersizKimlik);
    public function Silme($TabloDegeri ,$BenzersizKimlik);
}
interface CRUD extends CRUD{
    public function Olusturma($TabloDegeri, $BenzersizKimlik);
    public function Okuma($TabloDegeri, $BenzersizKimlik);
    public function Guncelleme($TabloDegeri, $BenzersizKimlik);
    public function Silme($TabloDegeri, $BenzersizKimlik);
}
class Test implements CRUD {
    public function Olusturma($TabloDegeri ,$BenzersizKimlik){

    }
    public function Yazma($TabloDegeri ,$BenzersizKimlik){

    }
    public function Duzenleme($TabloDegeri ,$BenzersizKimlik){

    }
    public function Silme($TabloDegeri ,$BenzersizKimlik){
    }
}