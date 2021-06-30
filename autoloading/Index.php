<?php 
require_once 'App/Init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharter", "Neil Druckman", "Sony Computer", 250000, 50);
$produk3 = new Komik("One piece", "Oda", "Shonen Jump", "500000", 900);

$infoProduk = new CetakInfoProduk();
$infoProduk->tambahProduk($produk1);
$infoProduk->tambahProduk($produk2);
echo $infoProduk->cetak();

echo "<hr>";    
new Coba();