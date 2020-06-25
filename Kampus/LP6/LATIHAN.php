<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Fungsi</title>
</head>
<body>
<h2>Latihan Fungsi</h2>
    <form action="LATIHAN.php" method="post">
    Masukkan Nilai Tugas = <input type="text" name= "tugas" placeholder="0-100" required><br/>
    Masukkan Nilai UTS = <input type="text" name= "uts" placeholder="0-100" required><br/>
    Masukkan Nilai UAS = <input type="text" name= "uas" placeholder="0-100" required><br/>
    <input type="submit" name="oke" value="kirim">
    </form>

    <?php 
    // Membuat fungsi Grade
    function grade($nilai){
        if($nilai >= 86 && $nilai <= 100 ) { $grade = "A"; }
        if($nilai >= 76 && $nilai <= 85 )  { $grade = "B"; }
        if($nilai >= 56 && $nilai <= 75 )  { $grade = "C"; }
        if($nilai >= 1 && $nilai <= 55 )  { $grade = "D"; }
        if($nilai <= 1 )  { $grade = "E"; }
 return $grade;
    }
    if(isset($_POST['oke'])){
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $nilai = (0.3*$tugas)+(0.2*$uts)+(0.5*$uas);
        // Penggunaan fungsi grade
        $grade  = grade($nilai);

        echo "Nilai Tugas Anda adalah : $tugas <br>";
        echo "Nilai uts Anda adalah : $uts <br>";
        echo "Nilai uas Anda adalah : $uas <br>";
        echo "Nilai Akhir Anda : $nilai, dengan grade $grade";     
    }    
    ?>
</body>
</html>