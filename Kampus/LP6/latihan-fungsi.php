<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Fungsi</title>
</head>
<body>
    <?php 
    // Tanpa Parameter
    function cetak_judul(){
        echo "<h2>Pemrograman Web</h2>";
    }
    cetak_judul(); // Panggil Fungsi Cetak Judul
    echo "<br>";
    // Dengan Parameter
    function gabung_string($string1,$string2){
        $hasil = $string1 . ' ' . $string2;
        return $hasil;
    }
    // Menggunakan Variabel bantu untuk penampung
    $gabung = gabung_string("Saya","Belajar");
    echo $gabung . "<br>";
    // Nilai Return langsung diproses
    echo gabung_string("Fungsi","di PHP");
    echo "<br><br>";

    // Menambahkan nilai default
    function nama_bulan($bulan, $tahun = 2020){
        echo $bulan . ' ' . $tahun;
    }
    nama_bulan('mei');
    
    ?>
</body>
</html>