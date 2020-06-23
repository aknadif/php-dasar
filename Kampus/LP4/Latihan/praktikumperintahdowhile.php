<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Do While pada PHP</title>
</head>
<body style="text-align : center; margin-top : 100px">
  <h1>Latihan Perulangan dengan Do While</h1>
  <?php 
  echo "Perulangan cara pertama<br/>";
  echo "Latihan Perulangan kelipatan 3<br/>"; 
  $bil = 3;
  do{
    echo "bilangan : $bil <br/>";
    $bil = $bil+3;
  } 
  while($bil<50);
        
        echo"<br/>";
        echo "Perulangan cara kedua <br>";
        echo"Latihan perulangan kelipatan 3 <br/>";
        $x=0;

      do{
        echo "Kelipatan 3 =" . $x=$x+3;
        echo "<br/>";
      }while ($x<=50);
  ?>  
</body>
</html>