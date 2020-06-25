<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Mengakses ARRAY Multidimensi</title>
</head>
<body>
    <h2>Latihan Mengakses ARRAY Multidimensi</h2>

    <?php 
    // Array Berindeks
    $matrik = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    
    echo "<h3>" . " mengakses array multidimensi berindeks" . "<br>" . "</h3>";
    echo $matrik[1][0]. "<br>";

    // Array Assosiatif
    $mhs = ["satu" =>
                ["nama" => "Rosa", "nim" => 1234123, "umur" => 19], 
            "dua" =>
                ["nama" => "Ruby", "nim" => 1123, "umur" => 18],  
            "tiga" =>
                ["nama" => "Sri", "nim" => 12343, "umur" => 19]
        ];
    echo "<h3>" . "Mengakses Array Asosiatif" . "<br>" . "</h3>";
    echo "nama : ". $mhs['satu']['nama']."<br>"; 
    echo "nim : ". $mhs['satu']['nim']."<br>"; 
    ?>

</body>
</html>