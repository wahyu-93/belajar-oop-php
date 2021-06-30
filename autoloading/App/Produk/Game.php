<?php 
class Game extends Produk implements infoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $waktuMain=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    // method di abstrack class
    public function infoProduk(){
        $str = "{$this->judul} | {$this->getlabel()}, (Rp. {$this->harga})";

        return $str;
    }
    
    // method yg ada di interface
    public function getInfoProduk(){
        $str = "Game : ". $this->infoProduk() ." ~ {$this->waktuMain} Jam";

        return $str;
    }

}