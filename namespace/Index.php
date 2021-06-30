<?php 
require_once 'App/Init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharter", "Neil Druckman", "Sony Computer", 250000, 50);
// $produk3 = new Komik("One piece", "Oda", "Shonen Jump", "500000", 900);

// $infoProduk = new CetakInfoProduk();
// $infoProduk->tambahProduk($produk1);
// $infoProduk->tambahProduk($produk2);
// echo $infoProduk->cetak();

// new App\Produk\User();
// echo "<br>";
// new App\Service\User();

// bisa dengan menggunakan as atau alias
use App\Produk\User as ProdukUser;
use App\Service\User;
// kalo misal tanpa as maka gunakana nama yg diujungnya saja atau nama classnya 
// tidak usah full namespacenya digunakan

// contoh makai as
new ProdukUser();
echo "<br>";

// contoh tanpa as
new User();

