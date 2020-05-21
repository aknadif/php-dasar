<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body style="font-size :20px">
    <h1 style="text-align :center;font-size :50px">Tarif Ojek Online</h1>
    <h4>Zona 1 = Jawa, Sumatra, dan Bali</h4>
    <h4>Zona 2 = JaBoDeTaBek</h4>
    <h4>Zona 3 = Kalimantan, Sulawesi, Maluku, Nusa Tenggara, dan Papua</h4>
    
    <form action="" method="post">
    <label for="jojol">Pilih Jenis Ojol : </label>
        <select name="jojol"id="jojol" style="
        width: 100%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
        font-size: 15px;">
        <option value="jojol1" >Ojol 1</option>
        <option value="jojol2" >Ojol 2</option>
        <option value="jojol3" >Ojol 3</option>
    </select>
   <br>

    <label for="zona">Pilih Zona : </label>
        <select name="zona"id="zona" style="
        width: 100%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
        font-size: 15px;">
        <option value="zona1" >Zona 1</option>
        <option value="zona2" >Zona 2</option>
        <option value="zona3" >Zona 3</option>
    </select>
    <br>

    <label for="jarak">Masukkan Jarak : </label>
        <input type="integer" id="jarak" name = "jarak" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
        border-radius: 4px;box-sizing: border-box;font-size: 15px;" placeholder="Jarak..." required  >
    <br>
        <button type="submit" class="btn btn-primary" name = "oke" value="Get Selected Values" style=" background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;">Submit</button>
    </form>
    <?php 
    if (isset($_POST["oke"])) {
            $jarak = $_POST["jarak"];
            $zona = $_POST["zona"];
            $jojol = $_POST["jojol"];
            switch ($zona) {
                case ("zona1"):
                    if ($jarak <= 4 ) {
                        echo "Anda menempuh jarak $jarak km <br>";
                        switch($jojol){
                            case 'jojol1':
                                echo "Kamu juga memilih perusahaan Ojol 1 dan berada di Zona 1 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 7000";
                                break;
                            case 'jojol2':
                                echo "Kamu juga memilih perusahaan Ojol 2 dan berada di Zona 1 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 7200";
                                break;
                            case 'jojol3':
                                echo "Kamu juga memilih perusahaan Ojol 3 dan berada di Zona 1 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 7500";
                                break;
                            }  
                    } if ($jarak > 4) {
                        echo "Anda menempuh jarak $jarak km <br>";
                        switch($jojol){
                            case 'jojol1':
                                echo "Kamu juga memilih zona 1 dan dari perusahaan Ojol 1 <br>";
                                $total = 7000 + ($jarak - 4)*2500; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                            case 'jojol2':
                                echo "Kamu juga memilih zona 1 dan dari perusahaan Ojol 2 <br>";
                                $total = 7200 + ($jarak - 4)*2600; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                            case 'jojol3':
                                echo "Kamu juga memilih zona 1 dan dari perusahaan Ojol 3 <br>";
                                $total = 7500 + ($jarak - 4)*2400; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                        }  
                    }
                    break;
                case ("zona2"):
                    if ($jarak <= 4 ) {
                        echo "Anda menempuh jarak $jarak km <br>";
                        switch($jojol){
                            case 'jojol1':
                                echo "Kamu juga memilih perusahaan Ojol 1 dan berada di Zona 2 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 8000";
                                break;
                            case 'jojol2':
                                echo "Kamu juga memilih perusahaan Ojol 2 dan berada di Zona 2 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 8200";
                                break;
                            case 'jojol3':
                                echo "Kamu juga memilih perusahaan Ojol 3 dan berada di Zona 2 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 8500";
                                break;
                            }  
                    } if ($jarak > 4) {
                        echo "Anda menempuh jarak $jarak km <br>";
                        switch($jojol){
                            case 'jojol1':
                                echo "Kamu juga memilih zona 2 dan dari perusahaan Ojol 1 <br>";
                                $total = 8000 + ($jarak - 4)*2700; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                            case 'jojol2':
                                echo "Kamu juga memilih zona 2 dan dari perusahaan Ojol 2 <br>";
                                $total = 8200 + ($jarak - 4)*2800; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                            case 'jojol3':
                                echo "Kamu juga memilih zona 2 dan dari perusahaan Ojol 3 <br>";
                                $total = 8500 + ($jarak - 4)*2600; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                        } 
                    }
                    break;
                case ("zona3"):
                    if ($jarak <= 4 ) {
                        echo "Anda menempuh jarak $jarak km <br>";
                        switch($jojol){
                            case 'jojol1':
                                echo "Kamu juga memilih perusahaan Ojol 1 dan berada di Zona 3 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 9000";
                                break;
                            case 'jojol2':
                                echo "Kamu juga memilih perusahaan Ojol 2 dan berada di Zona 3 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 9200";
                                break;
                            case 'jojol3':
                                echo "Kamu juga memilih perusahaan Ojol 3 dan berada di Zona 3 <br>";
                                echo "Total yang harus kamu bayar adalah Rp 9500";
                                break;
                            }  
                    } if ($jarak > 4) {
                        echo "Anda menempuh jarak $jarak km <br>";
                        switch($jojol){
                            case 'jojol1':
                                echo "Kamu juga memilih zona 3 dan dari perusahaan Ojol 1 <br>";
                                $total = 9000 + ($jarak - 4)*2900; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                            case 'jojol2':
                                echo "Kamu juga memilih zona 3 dan dari perusahaan Ojol 2 <br>";
                                $total = 9200 + ($jarak - 4)*3000; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                            case 'jojol3':
                                echo "Kamu juga memilih zona 3 dan dari perusahaan Ojol 3 <br>";
                                $total = 9500 + ($jarak - 4)*2800; 
                                echo "Total yang harus kamu bayar = Rp $total";
                                break;
                        } 
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