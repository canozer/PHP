<?php
$myfile = fopen("YemekListe.txt", "a") or die("Unable to open file!");
$txt = $_GET["YemekAd"];
fwrite($myfile, $txt);
fwrite($myfile, $txt);
$txt = $_GET["Malzeme"];
fwrite($myfile, $txt);
fclose($myfile);

if ($myfile == True){
    echo "Yemeğiniz Kaydedildi";
}
else{
    echo "Tekrar deneyiniz";
}