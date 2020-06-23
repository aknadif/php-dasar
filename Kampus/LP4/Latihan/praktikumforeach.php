<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Pengulangan menggunakan foreach</title>
</head>
<body style="text-align : center; margin-top : 100px">
    <?php 
    $a = [
        "Surakarta",
        "Jakarta",
        "Bandung",
        "Yogyakarta"
    ];
    foreach ($a as $data){
        echo "$data <br>";
    }
    echo "<br>";

    $pegawai = [
        "Ketua" => "Andi",
        "Sekertaris" => "Bintang",
        "Bendahara" => "Chaca"
    ];
    foreach ($pegawai as $jabatan => $pejabat){
        echo "$jabatan dijabat oleh $pejabat <br>";
    }
    
    ?>
</body>
</html>