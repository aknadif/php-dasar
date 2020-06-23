<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelipatan</title>
</head>
<body style="text-align : center; margin-top : 100px">
    <form action="Praktikumsederhana.php" method="POST">
    Masukkan Nilai Maksimal = <input type="integer" name="max"><br/>
    Masukkan Nilai Kelipatan = <input type="integer" name="kelipatan"><br/>
    <input type="submit" name="oke" value="kirim">
    </form>

    <?php 
        if (isset($_POST["oke"])) {
            $max = $_POST["max"];
            $kelipatan =$_POST["kelipatan"];

            for ($i = 1; $i <= $max; $i++){
                if ($mod = $i % $kelipatan == 0 ){
echo "kelipatan " . $kelipatan . " dari Nilai " . $max . " = " . $i . "<br>";
                }
            }
        }
    
    
    ?>
</body>
</html>