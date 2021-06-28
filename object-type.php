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
}

class CetakInfoProduk {
    // memasukkan parameter yg boleh adalah objec dari produk saja
    public function cetak(Produk $produk){
        $str = "{$produk->judul}, {$produk->getlabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}


$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000");
$produk4 = new Produk("Uncharter", "Neil Druckman", "Sony Computer", "250000");

$infoProduk1 = new CetakInfoProduk();

echo "Komik : ".$produk3->getlabel();
echo "<br>";
echo "Game : ".$produk4->getlabel();
echo "<br>";
echo $infoProduk1->cetak($produk3);
echo "<br>";
echo $infoProduk1->cetak($produk4);

