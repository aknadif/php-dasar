<?php 
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
?>