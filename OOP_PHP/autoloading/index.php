<?php 

require_once "App/init.php";

$produk1 = new komik("Naruto","Mashashi Kishimoto","Shonen Jump",30000, 100);
$produk2 = new game("Uncharted", "Entah Siapa", "Sony Computer", 100000, 50);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->Cetak();

?>