<?php 
// Koneksi ke database //index
$conn = mysqli_connect("localhost", "root", "" , "latihan");
function query($query){

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}
//Tambah
function tambah($data){

    global $conn;

    $nama    = htmlspecialchars($data ["nama"]);
    $nim     = htmlspecialchars($data ["nim"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);
    $umur    = htmlspecialchars($data ["umur"]);
    $asal    = htmlspecialchars($data ["asal"]);
    

    $gambar  = upload();
    if (!$gambar){
        return false;
    }

    $query = "INSERT INTO mahasiswa
            VALUES
            ( NULL ,'$nama', '$nim', '$jurusan', '$umur', '$asal','$gambar')
            ";
mysqli_query($conn, $query);


 return mysqli_affected_rows($conn);   
}

// Upload Gambar
function upload (){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];
    // cek apakah sudah diinputkan belom
    if ($error === 4 ){
       echo "<script>
            alert('Pilih Gambar Dahulu!');
        </script>";
        return false;
    }
    // cek apakah ekstensinya sesuai tidak
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script>
            alert('yang anda inputkan bukan gambar!');
        </script>";
        return false;
    }
    // cek apakah sizenya sesuai tidak
    if($ukuranfile > 1000000){
        echo "<script>
            alert('Ukuran file terlalu besar! ');
        </script>";
        return false;
    }
    // Jika LOLOS
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensiGambar; 
    move_uploaded_file($tmpname, 'img/' . $namafilebaru);
    return $namafilebaru;
}
//Hapus
function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ");
    return mysqli_affected_rows($conn);
}
//Ubah
function ubah($data){
    global $conn;
    $id = $data["id"];

    $nama    = htmlspecialchars($data ["nama"]);
    $nim     = htmlspecialchars($data ["nim"]);
    $jurusan = htmlspecialchars($data ["jurusan"]);
    $umur    = htmlspecialchars($data ["umur"]);
    $asal    = htmlspecialchars($data ["asal"]);
    $gambarlama  = htmlspecialchars($data ["gambarlama"]);

    if ($_FILES["gambar"]["error"] === 4){
        $gambar = $gambarlama;
    }else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nim = '$nim',
            jurusan = '$jurusan',
            umur = '$umur',
            asal = '$asal'
            WHERE id = $id
            ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function cari ($keyword){
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                umur LIKE '%$keyword%' OR
                asal LIKE '%$keyword%' ";
                
            return query($query);
            }
// Registrasi
function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email  = stripslashes($data["email"]);
    $password =  mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    // cek username sudah ada atau belum
$result =    mysqli_query($conn, "SELECT username FROM users WHERE 
        username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('Username sudah terdaftar !')
        </script>";
        return false;
    }
    //konfirmasi Password
    if ($password !== $password2){
        echo "<script>
                alert('Konfirmasi password tidak valid !!!');
              </script> ";
            return false;
    }
    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // Tambah userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES(NULL , '$username','$email','$password')");
    return mysqli_affected_rows($conn);
}

?>
