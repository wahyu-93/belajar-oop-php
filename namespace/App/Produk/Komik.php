<?php 
class Komik extends Produk implements infoProduk {
    // ini variable spesifik yg hnya dimiliki oleh class childnya
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlHalaman=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
    
        $this->jmlHalaman = $jmlHalaman;
    }


    // method yg ada di abstrack class
    public function infoProduk(){
        $str = "{$this->judul} | {$this->getlabel()}, (Rp. {$this->harga})";

        return $str;
    }

    // method yang ada di interface
    public function getInfoProduk(){
        // parent itu merujuk ke class parentnya atau class produk
        $str = "Komik : " . $this->infoProduk(). "- {$this->jmlHalaman} Halaman";

        return $str;
    }
}
