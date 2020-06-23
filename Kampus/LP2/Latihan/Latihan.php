
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>

</head>

<body style="font-size :24px;text-align :center;padding:25px;">
    <form action="" method="POST">
        Bilangan 1 = <input type="integer" name="angka1"><br> Bilangan 2 = <input type="integer" name="angka2"><br>
        <button type="submit" class="btn btn-primary" value="Submit">Hitung</button>
    </form>

    <?php   
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$modulus = $angka1 % $angka2;
$eksponensial = $angka1 **  $angka2;

echo "<h2>Perhitungan Aritmatika</h2>";
echo "Angka 1 = $angka1 <br>";
echo "Angka 2 = $angka2";
echo"<br><br><br>";
echo "$angka1 + $angka2 = $tambah";
echo "<br>$angka1 - $angka2 = $kurang";
echo "<br>$angka1 * $angka2 = $kali";
echo "<br>$angka1 / $angka2 = $bagi";
echo "<br>$angka1 % $angka2 = $modulus";
echo "<br>$angka1 ** $angka2 = $eksponensial";
?>
</body>

</html>