<?php
class tesConstan {
    public $kelas = __CLASS__;
    // define tidak bisa dipakai dalam class
    // define('nama', 'wahyu');

    // Const bisa dipakai dalam class
    const NAMA = "wahyu";
}

// memanggil dengan cara static
echo tesConstan::NAMA;
echo "<br>";
echo __DIR__;
echo "<br>";

$obj = new tesConstan();
echo $obj->kelas;
