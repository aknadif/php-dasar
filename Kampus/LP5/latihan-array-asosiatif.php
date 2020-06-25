<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan ARRAY Asosiatif</title>
</head>
<body>
    <h2>Latihan ARRAY Asosiatif</h2>

    <?php 
    $color = array ("pertama" => "merah",
                    "kedua" => "jingga",
                    "ketiga" => "hijau",
                    "keempat" => "kuning",);
    $warna ["pertama"] = "merah";
    $warna ["kedua"] = "jingga";
    $warna ["ketiga"] = "hijau";
    $warna ["keempat"] = "kuning";

    $werno =   ['siji' => 'abang',
                'loro' => 'kuning',
                'telu' => 'ijo'];
    
    print_r ($warna);
    echo "<br>";
    echo "<pre>". print_r($color, true) . "</pre>" . "<br>";
    print_r ($werno);
    ?>

</body>
</html>