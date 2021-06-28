<?php 
class produk {
    public  $judul = 'judul',
            $penulis = 'penulis',
            $penerbit = 'penerbit',
            $harga = 0;

           public function getlabel(){
               return "$this->judul, $this->penulis, $this->penerbit";
           }
    
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "uncharted";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = 'Naruto';
$produk3->penulis = 'Masashi kisimoto';
$produk3->penerbit = 'Shonen Jump';
$produk3->harga = 30000;
// var_dump($produk3);

$produk4 = new Produk();
$produk4->judul = 'Uncharter';
$produk4->penulis = 'Neil Druckmann';
$produk4->penerbit = 'Sony Computer';
$produk4->harga = 250000;

echo "Komik : $produk3->judul,  Penulis : $produk3->penulis";
echo "<hr>";
echo "Komik : ".$produk3->getlabel();
echo "<br>";
echo "Game : ".$produk4->getlabel();


