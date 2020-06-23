<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body style="text-align : center;">
    <form action="Latihan.php" method="POST">
    Masukkan Nilai Bilangan = <input type="intrger" name="bilangan"><br>
    Masukkan Nilai Maksimal Pangkat = <input type="integer" name="max"><br>
    <button type="submit" name="oke" class="btn btn-primary">Hitung!</button>
    </form>

    <?php 
    
    

    if (isset($_POST["oke"])){
        $bilangan = $_POST["bilangan"];
        $max = $_POST["max"];
        echo "Bilangan = $bilangan <br>";
        echo "Maks Pangkat = $max <br/>";
        if ($max==0){
            echo "$bilangan Pangkat $max = 1 <br>";
        }
        for ($a =1; $a <= $max ; $a++){
            $hasil = pow($bilangan, $a);
                    echo "$bilangan Pangkat ". $a . " = " . $hasil ."<br>";
                
                
            
        }

    }
    
    
    ?>
</body>
</html>