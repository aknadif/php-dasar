<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan ARRAY Multidimensi</title>
</head>
<body>
    <h2>Latihan ARRAY Multidimensi</h2>
    <?php 
    $kendaraan = [
        ['Mobil' => ['merk' => 'Toyota', 'type' => 'Vios', 'year' => '2016' ]], 
        // Value mobil menjadi indeks
        'Sepeda',
        'Truk',
        ['Motor' => ['Honda' => 'Yamaha','Suzuki' ]],
        // Value motor menjadi indeks
        'Bus'
    ];
    $barang = array ('tas',
                        array('buku','pensil','bolpoin'),
                        'seragam');

    echo '<pre>'; print_r($kendaraan);
    echo '<pre>'; print_r($barang);      
    ?>

</body>
</html>