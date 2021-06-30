<?php 

// class abstract tidak bisa diinstansiasi sebagai objek
// minimal punya 1 method abstrack dan methodnya tidak boleh memiliki implemntrasi, hanya berupa interface

abstract class produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    // method ini harus ad di setiap child class nya
    abstract public function getInfoProduk();

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function infoProduk(){
        $str = "{$this->judul} | {$this->getlabel()}, (Rp. {$this->harga})";

        return $str;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga -  ($this->harga * $this->diskon / 100 );
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
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
        $str = "Komik : " . $this->infoProduk(). "- {$this->jmlHalaman} Halaman";

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
        $str = "Game : ". $this->infoProduk() ." ~ {$this->waktuMain} Jam";

        return $str;
    }

}

// menyederhanakan lagi class ini
class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK <br>";

        foreach ($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharter", "Neil Druckman", "Sony Computer", 250000, 50);
$produk3 = new Komik("One piece", "Oda", "Shonen Jump", "500000", 900);

$infoProduk = new CetakInfoProduk();
$infoProduk->tambahProduk($produk1);
$infoProduk->tambahProduk($produk2);
echo $infoProduk->cetak();

