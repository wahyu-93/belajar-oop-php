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
               return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
            }
    
}


$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000");
$produk4 = new Produk("Uncharter", "Neil Druckman", "Sony Computer", "250000");
$produk5 = new Produk();

echo "Komik : ".$produk3->getlabel();
echo "<br>";
echo "Game : ".$produk4->getlabel();
echo "<br>";
echo $produk5->getlabel();


