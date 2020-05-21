<?php

interface infoProduk {
    public function getinfoProduk();
}

abstract class Produk {
    protected   $judul,
                $penulis,
                $penerbit,
                $harga,
                $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0)
    {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
    }
    public function setjudul($judul)
    {
        $this->judul = $judul;
    }
    public function getjudul()
    {
        return $this->judul;
    }
    public function setpenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getpenulis()
    {
        return $this->penulis;
    }
    public function setpenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getpenerbit()
    {
        return $this->penerbit;
    }
    public function setharga($harga)
    {
        $this->harga = $harga;
    }
    public function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setdiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getdiskon()
    {
        return $this->diskon;
    }

    public function getLabel()
    {
        return " $this->penulis, $this->penerbit";
    }
    abstract public function getinfo();

    
}


class komik extends Produk{
    public $jmlhalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlhalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman = $jmlhalaman;
    }
    public function getinfoProduk()
    {  
        $str = "Komik : " . $this->getinfo() ." - {$this->jmlhalaman} halaman. ";
        return $str;
    }
    public function getinfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga}) ";
        return $str;
    }
}

class game extends Produk{
    public $jammain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jammain=0)
    {
       parent::__construct($judul, $penulis, $penerbit, $harga);
       $this->jammain = $jammain; 
    }
    public function getinfoProduk()
    {
        $str = "Game : ". $this->getinfo() ." ~ {$this->jammain} jam. ";
        return $str;
    }
    public function getinfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga}) ";
        return $str;
    }
}


class CetakInfoProduk {
    public $daftarproduk = array();

    public function tambahproduk(Produk $produk)
    {
        $this->daftarproduk[] = $produk ;
    }
    public function Cetak()
    {   
        $str = "Daftar Produk : <br>";

        foreach ($this->daftarproduk as $p){
            $str .= "-{$p->getinfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new komik("Naruto","Mashashi Kishimoto","Shonen Jump",30000, 100);
$produk2 = new game("Uncharted", "Entah Siapa", "Sony Computer", 100000, 50);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->Cetak();
