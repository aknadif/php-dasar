<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Do While pada PHP</title>
</head>
<body style="text-align : center; margin-top : 100px">
    <?php 
    $a=1;
    do{
        echo"$a Tampil di browser <br/>";
        $a=$a+1;
    }
    while ($a <= 10)
    ?>
</body>
</html>