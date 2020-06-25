<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include File pada PHP</title>
</head>
<body>
    <div class="menu">
    <?php include 'menu.php'; ?>
    </div>

    <h1>Wellcome to my home page !</h1>
    <?php include 'var.php';
    echo "Nama : $nama <br>";
    echo "Nim  : $nim <br>"; 
    ?>
</body>
</html>