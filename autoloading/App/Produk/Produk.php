<?php
abstract class Produk {
    protected $judul,
              $penulis,
              $penerbit,
              $harga,
              $diskon = 0;

    abstract public function infoProduk();

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
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