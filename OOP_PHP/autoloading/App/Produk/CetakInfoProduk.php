<?php 
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
?>