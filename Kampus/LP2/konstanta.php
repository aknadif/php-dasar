<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Konstanta di PHP</title>
</head>
<body style="text-align : center;margin-top: 100px;">
    <?php 
    define("pi", "3.14");
    define("judul","Luas Lingkaran");

    echo judul ."<br> <br>";
    echo "Nilai pi = " .pi ."<br>";

    $jarijari = 3;
    $luaslingkaran = pi * $jarijari * $jarijari;
    echo "Jari jari = $jarijari". "<br><br>";
    echo "Luas Lingkaran = ".$luaslingkaran; 
    ?>
</body>
</html>