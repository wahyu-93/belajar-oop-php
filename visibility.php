<?php 
class produk {
    public  $judul,
            $penulis,
            $penerbit;

    private $harga;

    protected $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getlabel()}, (Rp. {$this->harga})";

        return $str;
    }

    public function getHarga(){
        return $this->harga -  ($this->harga * $this->diskon / 100 );
    }
}

class Komik extends Produk {
    // ini variable spesifik yg hnya dimiliki oleh class childnya
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlHalaman=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
    
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        // parent itu merujuk ke class parentnya atau class produk
        $str = "Komik : " . parent::getInfoProduk(). "- {$this->jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $waktuMain=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";

        return $str;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }


}

class CetakInfoProduk {
    // memasukkan parameter yg boleh adalah objec dari produk saja
    public function cetak(Produk $produk){
        $str = "{$produk->judul}, {$produk->getlabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharter", "Neil Druckman", "Sony Computer", 250000, 50);
$produk3 = new Komik("One piece", "Oda", "Shonen Jump", "500000", 900);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(10);
echo $produk2->getHarga();