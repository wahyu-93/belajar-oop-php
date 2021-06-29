<?php 
class produk {
    public  $judul,
            $penulis ,
            $penerbit ,
            $harga;

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
}

class Komik extends Produk {
    // ini variable spesifik yg hnya dimiliki oleh class childnya
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlHalaman=0){
        // supaya tidak melakukan pengetik ulang seperti parent classnya maka kita panggil construct parentnya (ovveride)
        parent::__construct($judul, $penulis, $penerbit, $harga);
        // output dari code diatas ya ini
        // $this->judul = $judul;
        // $this->penulis = $penulis;
        // $this->penerbit = $penerbit;
        // $this->harga = $harga;

        // cuma disingkat supaya ga ditulis ulang, makanya digunakan override

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
        // supaya tidak melakukan pengetik ulang seperti parent classnya maka kita panggil construct parentnya (ovveride)
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";

        return $str;
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






