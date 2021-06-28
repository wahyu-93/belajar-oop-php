<?php 
class produk {
    public  $judul,
            $penulis ,
            $penerbit ,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->jmlHalaman = $jmlHalaman;
                $this->waktuMain = $waktuMain;
                $this->tipe = $tipe;
            }

            public function getlabel(){
               return "$this->penulis, $this->penerbit";
            }

            public function getInfoLengkap(){
                $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()}, (Rp. {$this->harga})";

                if($this->tipe == "Komik"){
                    $str .= "- {$this->jmlHalaman} Halaman";
                }
                else {
                    $str .= "~ {$this->waktuMain} Jam";
                };

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


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharter", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");
$produk3 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 90000, 0, 100, "Game");


// ingin menampilkan output seperti ini, ditambah ada halaman untuk komik, dan waktu main unutk game
// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 3000) -  100 halaman
// Game : Uncharter | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam

// permasalahan yg muncul kalo properti trus bertambah ?
// solusinya digunakan lah enheritance ...

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();



