<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body style="text-align : center ;margin-top : 100px;">
    <h1 style="text-align :center;">Tarif Ojek Online</h1>
    <h4>Zona 1 = Jawa, Sumatra, dan Bali</h4>
    <h4>Zona 2 = JaBoDeTaBek</h4>
    <h4>Zona 3 = Kalimantan, Sulawesi, Maluku, Nusa Tenggara, dan Papua</h4>
    <form action="latihan.php" method="post">
    Pilih Zona : <select name="zona">
    <option value="zona1" >Zona 1</option>
    <option value="zona2" >Zona 2</option>
    <option value="zona3" >Zona 3</option>
    </select><br>
    Jarak = <input type="integer" name = "jarak"><br>
    <button type="submit" class="btn btn-primary" name = "oke" value="Get Selected Values">Submit</button>
    </form>

    <?php 
    if (isset($_POST["oke"])) {
        $jarak = $_POST["jarak"];

        echo "Jarak Kamu adalah $jarak km <br>";
            $zona = $_POST["zona"];
            switch ($zona) {
                case ("zona1"):
                    if ($jarak <= 4 ) {
                        echo "Kamu Memilih zona 1 <br>";
                        echo "Total yang harus kamu bayar adalah Rp 4000";
                    } if ($jarak > 4) {
                        echo "Kamu Memilih zona 1 <br>";
                        $total = 7000 + ($jarak - 4)*2500; 
                        echo "Total yang harus kamu bayar = Rp $total";
                    }
                    break;
                case ("zona2"):
                    if ($jarak <= 4 ) {
                        echo "Kamu Memilih zona 2 <br>";
                        echo "Total yang harus kamu bayar adalah Rp 4000";
                    } if ($jarak > 4) {
                        echo "Kamu Memilih zona 2 <br>";
                        $total = 8000 + ($jarak - 4)*2700; 
                        echo "Total yang harus kamu bayar = Rp $total";
                    }
                    break;
                case ("zona3"):
                    if ($jarak <= 4 ) {
                        echo "Kamu Memilih zona 3 <br>";
                        echo "Total yang harus kamu bayar adalah Rp 4000";
                    } if ($jarak > 4) {
                        echo "Kamu Memilih zona 3 <br>";
                        $total = 9000 + ($jarak - 4)*2900;  
                        echo "Total yang harus kamu bayar = Rp $total";
                    }
                    break;
                default:
                    echo "Inputan Anda Salah";
                    break;
            }    
    }        
    ?>    
</body>
</html>