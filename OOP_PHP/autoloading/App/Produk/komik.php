<?php 
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
?>