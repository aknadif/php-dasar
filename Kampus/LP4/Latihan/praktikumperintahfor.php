<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan While pada PHP</title>
</head>
<body style="text-align : center; margin-top : 100px">
  <h1>Latihan Perulangan dengan for</h1>
  <?php 
  echo "Perulangan Menggunakan for <br/>";
  echo "Latihan Perulangan kelipatan 3<br/>";
  $bil = 3;
  for ($i=0; $i < 50 ; $i=$i+$bil) { 
    echo "bilangan : $i <br/>";
  }
  ?>  
</body>
</html>