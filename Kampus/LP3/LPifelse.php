<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE DINAMIS pada PHP</title>
</head>
<body style="text-align : center ;margin-top : 100px;">
    <form action="LPifelse.php" method="POST">
    Masukkan Nilai = <input type="text" name="nilai"><br>
    <input type="submit" name="oke" value="kirim">
    </form>
    <?php 
    if (isset($_POST['oke']))
    {
        $nilai = $_POST['nilai'];
        if($nilai >=60){
            echo "Nilai Anda adalah $nilai, Anda Lulus";
        } else {
            echo "Nilai Anda adalah $nilai, Anda Tidak Lulus";
        }
    }
    ?>
</body>
</html>