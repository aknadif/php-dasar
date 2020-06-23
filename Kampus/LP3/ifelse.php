<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE pada PHP</title>
</head>
<body style="text-align : center ;margin-top : 100px;">
    <?php 
    $nilai = 40;
    if ($nilai >=60){
        echo "Nilai Anda $nilai, dan Anda LULUS";
    } else{
        echo "Niali Anda $nilai, dan Anda TIDAK LULUS";
    }
    ?>
</body>
</html>