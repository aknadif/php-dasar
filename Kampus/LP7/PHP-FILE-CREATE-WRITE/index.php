<?php 
$myfile = fopen("newfile.txt", "w") or die("Unable to open file !");
$txt = "Ahmad Khainur Nadhif\n";
fwrite($myfile,$txt);
$txt = "1803010024\n";
fwrite($myfile,$txt);
fclose($myfile);
?>