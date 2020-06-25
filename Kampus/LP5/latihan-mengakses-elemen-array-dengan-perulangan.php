<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Mengakses elemen array dengan perulangan</title>
</head>
<body>
    <h2>Latihan Mengakses elemen array dengan perulangan</h2>

    <?php 
    
    $bulan = [1 => "Januari","februari","maret"];
    $kota = array("Surakarta", "Jakarta", "Bandung", "Yogyakarta");
    $wulan = ["siji" => "jan", "loro" => "feb", "papat" => "april"];
    // Mengakses Array berindeks menggunakan for
    echo "<strong> Daftar Bulan : </strong><br>";
    for ($i=1; $i < sizeof($bulan); $i++) { 
        echo "Nama Bulan $i : " . $bulan[$i] . "<br>";
    }
    // Mengakses array indeks dengan foreach
    echo "<strong> Daftar Bulan : </strong><br>";
    foreach ($kota as $data){
        echo "$data <br>";
    }
    // Mengakses Array asosiatif menggunakan foreach
    echo "<strong> Contoh Wulan : </strong><br>";
    foreach ($wulan as $daftar => $urut) {
        echo "$daftar : $urut" . "<br>";
    }
    
    ?>
</body>
</html>