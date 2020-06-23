<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Tipe Data di PHP</title>
</head>
<body style="text-align : center;margin-top: 100px;">
    <?php 
    $nim = "1803010024";
    $nama ="Ahmad Khainur Nadhif";
    $umur ="19";
    $semester ="4";
    $angkatan ="1";
    $nilai ="92.3552";
    $status = TRUE;
    
    echo "NIM : " .$nim."<br>";
    echo "Nama : " .$nama."<br>";
    echo "Umur : " .$umur."<br>";
    echo "Semester : " .$semester."<br>";
    echo "Angkatan : " .$angkatan."<br>";
    print "<br>";
    printf ("Nilai : %.3f<br>",$nilai);
    if ($status)
    echo "Status : Aktif";
    else
    echo "Status : Tidak Aktif";
    ?>
</body>
</html>