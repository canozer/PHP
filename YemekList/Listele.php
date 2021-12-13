<?php
$myfile = fopen("YemekListe.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("YemekListe.txt"));
fclose($myfile);