<?php
trait Merhaba {
    public function merhabaDünyaDe() {
        echo 'Merhaba'.$this->dünyaGetir();
    }
    abstract public function dünyaGetir();
}

class MerhabaDünyam {
    private $dünya;
    use Merhaba;
    public function dünyaGetir() {
        return $this->dünya;
    }
    public function dünyaAta($val) {
        $this->dünya = $val;
    }
}