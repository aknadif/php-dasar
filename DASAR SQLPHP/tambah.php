<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'functions.php';

if ( isset($_POST["submit"])){

    if( tambah($_POST) > 0 ){
      echo  "<script>
            alert('Data Berhasil Dimasukkan');
            document.location.href = 'index.php';
        </script>";
    }else {
      echo  "<script>
        alert('Data Tidak Berhasil Dimasukkan !!!');
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
    <h1 style="text-align: center; font-size :50px;">Tambah Data</h1>

    <form action="" method="post" style="font-size: 25px" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">Nim : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="umur">Umur : </label>
                <input type="text" name="umur" id="umur"required>
            </li>
            <li>
                <label for="asal">Asal : </label>
                <input type="text" name="asal" id="asal"required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button name="submit">Tambah !!!</button>
            </li>
        </ul>



    </form>
</body>
</html>