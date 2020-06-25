<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan ARRAY Berindeks</title>
</head>
<body>
    <h2>Latihan ARRAY Berindeks</h2>

    <?php 
    // array indeks tanpa menentukan key
    $color = array("merah","kuning","hijau","dilangit yang biru");
    // array indeks cara kedua
    $warna [0] = "merah"; 
    $warna [1] = "kening";   
    $warna [2] = "biru";   
    $warna [3] = "dilangit yang biru";

    // membuat array dengan siku
    $kendaraan = ['Mobil','Motor',5 => 'Sepeda','Truk','Bus'];
    // indeks array mobil=0,motor=1,sepeda=5,truk=6,bus=7

    $bulan = [1=>'Januari','Februari','Maret','April','Mei'];
    // indeks array dimulai dari angka 1.

    print_r($warna);
    echo "<br>";
    var_dump ($bulan);
    echo "<br>";
    echo "<pre>". print_r($color,true) . "</pre>" . "<br>";
    echo "<pre>" ;var_dump($kendaraan);"</pre>"

    ?>

</body>
</html>

