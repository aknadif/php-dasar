<?php
$myfile = fopen("identitas.txt","r") or die("unable to open file !");
echo "Fungsi fgets <br>";
echo fgets($myfile);
fclose($myfile);
?>

<?php 
echo "<br>" . "<br>" . "Fungsi feof <br>";
$myfile = fopen("identitas.txt", "r") or die("unable to open file !");
// Output one line until end-of-life
while(!feof($myfile)){
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>