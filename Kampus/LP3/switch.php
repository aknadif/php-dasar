<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch pada PHP</title>
</head>
<body style="text-align : center ;margin-top : 100px;">
<form action="switch.php" method="POST">
    Masukkan Nilai Tugas = <input type="text" name="tugas" placeholder="0-100"><br/>
    Masukkan Nilai UTS   = <input type="text" name="uts" placeholder="0-100"><br/>
    Masukkan Nilai UAS   = <input type="text" name="uas" placeholder="0-100"><br/>
    <input type="submit" name="oke" value="Masukkan">
    </form>
    <?php 
        if (isset($_POST["oke"])){
            $tugas = $_POST["tugas"];
            $uts = $_POST["uts"];
            $uas = $_POST["uas"];
            $nilai=(0.3* $tugas)+(0.2*$uts)+(0.5*$uas);
            echo "Nilai Tugas Anda adalah $tugas <br>";
            echo "Nilai UTS Anda Adalah $uts <br>";
            echo "Nilai UAS Anda Adalah $uas <br>"."<br>";

            if (isset($_POST["submit"]))
            $nilai = $_POST["nilai"];
            switch ($nilai) {
                case ($nilai >=0 && $nilai<1);
                    echo "Nilai Anda adalah $nilai, = E"; 
                break;
            case ($nilai >=1 && $nilai <=55); 
                echo "Nilai Anda adalah = $nilai, = D";
                break;
            case ($nilai >=56 && $nilai <=75); 
                echo "Nilai Anda adalah = $nilai, = C";
                break;
            case ($nilai >=76 && $nilai <=85);
                echo "Nilai Anda adalah = $nilai, = B";
                break;
            case ($nilai >=86 && $nilai <=100);
                echo "Nilai Anda adalah = $nilai, = A";
            default:
                    echo " Salah Inputan";
        }
        }
        ?>
</body>
</html>