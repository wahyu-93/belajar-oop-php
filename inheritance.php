<?php 
class produk {
    public  $judul,
            $penulis ,
            $penerbit ,
            $harga,
            $jmlHalaman,
            $waktuMain;

            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlHalaman = 0, $waktuMain = 0){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->jmlHalaman = $jmlHalaman;
                $this->waktuMain = $waktuMain;
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
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getlabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getlabel()}, (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";

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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharter", "Neil Druckman", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();






