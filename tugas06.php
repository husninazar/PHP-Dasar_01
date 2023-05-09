<?php

abstract class Bentuk2D {
    abstract public function luasBidang();
    abstract public function kelilingBidang();
}

class Lingkaran extends Bentuk2D {
    public $jari2;
    
    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }
    
    public function namaBidang() {
        return "Lingkaran";
    }
    
    public function luasBidang() {
        return pi() * pow($this->jari2, 2);
    }
    
    public function kelilingBidang() {
        return 2 * pi() * $this->jari2;
    }
}

class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;
    
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    public function namaBidang() {
        return "Persegi Panjang";
    }
    
    public function luasBidang() {
        return $this->panjang * $this->lebar;
    }
    
    public function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    
    public function namaBidang() {
        return "Segitiga";
    }
    
    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    
    public function kelilingBidang() {
        $sisiMiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $this->alas + $this->tinggi + $sisiMiring;
    }
}

?>
