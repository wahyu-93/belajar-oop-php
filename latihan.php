<?php

Trait Hewan 
{
    public  $nama,
            $darah = 50,
            $jumlahKaki,
            $keahlian;

    public function atraksi()
    {
        return $this->nama .PHP_EOL. $this->keahlian;
    }

    public function getInfoHewan()
    {
        return "{$this->nama} | {$this->darah} | {$this->jumlahKaki} | {$this->keahlian}";
    }

}

Trait Fight 
{
    public $attackPower, $defencePower;

    public function serang($target)
    {
        return $this->nama . " Sedang Menyerang " .$target;
    }

    public function diserang($attack)
    {
        $this->darah = $this->darah - ($attack / $this->defencePower);
        if ($this->darah <=0){
            $str = $this->nama . " mati ";
        }
        else {
            $str = $this->nama . " sedang diserang, Sisa Darah " . $this->darah;
        };

        return $str;
    }
}

class Harimau
{
    use Hewan, Fight;

    public function __construct($nama="Harimau1")
    {   
        $this->nama = $nama;
        $this->jumlahKaki = 4;
        $this->keahlian = "Berlari Cepat";
        $this->attackPower = 7;
        $this->defencePower = 8;
    }
}

class Elang
{
    use Hewan, Fight;

    public function __construct($nama="elang1")
    {
        $this->nama = $nama;
        $this->jumlahKaki = 2;
        $this->keahlian = "Terbang Tinggi";
        $this->attackPower = 10;
        $this->defencePower = 5;
    }
}

$harimau1 = new Harimau("harimau_2");
$elang1 = new Elang("elang_2");

echo $harimau1->getInfoHewan("harimau_1");
echo "<br>";
echo $elang1->getInfoHewan("elang_1");

echo "<hr>";
echo $harimau1->serang("elang_1");
echo "<br>";
echo $elang1->diserang($harimau1->attackPower);