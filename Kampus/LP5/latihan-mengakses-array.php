<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Menagakses ARRAY</title>
</head>
<body>
    <h2>Latihan Menagakses ARRAY</h2>
    <?php 
    // Membuat Array Berindeks
    $jenisbuku = [ "Pemrograman Web", "Database", "Desain Grafis", "internet", "Office Applocation"];
    // Mengakses Array Berindeks
    echo "<strong> Daftar Jenis Buku : </strong><br>";
    echo "Nama Buku 1 : " . $jenisbuku[0] . "<br>";
    echo "Nama Buku 2 : " . $jenisbuku[1] . "<br>";
    echo "Nama Buku 3 : " . $jenisbuku[2] . "<br>";
    echo "Nama Buku 4 : " . $jenisbuku[3] . "<br>";
    echo "Nama Buku 5 : " . $jenisbuku[4] . "<br><br>";
    // Membuat Array Assosiatif
    $buku = array("isbn" => "007-22446-9-2",
                    "judul" => "Judul Buku",
                    "pengarang" => "Nama Pengarang",
                    "penerbit" => "Nama Penerbit");
    // Mengakses Array Assosiatif
    echo "<strong> Contoh Buku : </strong><br>";
    echo "ISBN : " . $buku["isbn"] . "<br>";
    echo "Judul Buku : " . $buku["judul"] . "<br>";
    echo "Pengarang : " . $buku["pengarang"] . "<br>";
    echo "Penerbit : " . $buku["penerbit"] . "<br>";
    ?>
</body>
</html>