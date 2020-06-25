<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Menggunakan Array dengan sort</title>
</head>
<body>
    <h2>Latihan Menggunakan Array dengan sort</h2>
<?php 
$numbers = array(4,6,2,22,11);
sort($numbers); 
// Menampilkan Array
$arrlength=count($numbers);
for ($x=0; $x < $arrlength; $x++) { 
    echo $numbers[$x];
    echo "<br>";
}
?>
</body>
</html>