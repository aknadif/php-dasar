<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While pada PHP</title>
</head>
<body style="text-align : center; margin-top : 100px">
    <h3>Latihan Perulangan dengan While</h3>
    <?php 
    $x = 1;
    echo "Perulangan cara pertama<br/>";
    while ($x<=10){
        echo"x =$x <br/>";
        $x++;
    }
    echo "<br/>";
    echo "Perulangan cara kedua <br>";
    $x = 1;
    while($x <=10):
        echo "x= ".$x++;
        echo "<br/>";
    endwhile;
    ?>
</body>
</html>