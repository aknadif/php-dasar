<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'functions.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



if ( isset($_POST["submit"])){

    if( ubah ($_POST) > 0 ){
      echo  "<script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>";
    }else {
      echo  "<script>
        alert('Data Tidak Berhasil Diubah !!!');
        document.location.href = 'index.php';
    </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1 style="text-align: center; font-size :50px;">Ubah Data</h1>

    <form action="" method="post" style="font-size: 25px" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"] ;?>">
    <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"] ;?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nim">Nim : </label>
                <input type="text" name="nim" id="nim" required
                value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur"required
                value="<?= $mhs["umur"]; ?>">
            </li>
            <li>
                <label for="asal">Asal : </label>
                <input type="text" name="asal" id="asal"required
                value="<?= $mhs["asal"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs["gambar"]; ?> " width="100px"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button name="submit">Ubah Data !!!</button>
            </li>
        </ul>



    </form>
</body>
</html>