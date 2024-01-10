<?php
$cars = array("TOYOTA SUPRA MK4", "NISSAN GTR R34", "MAZDA RX7");
$negara = ["Indonesia", "Kanada", "Brunei"];
$kota = array("Bandung", "Jakarta", "Banjarmasin");

// echo "Saya Suka ".$cars[0].", ".$cars[1]." Dan ".$cars[2]."." ;
var_dump($kota);
$kota[] = "Bogor";
echo "<br>";
var_dump($kota);
$kota[2] = "Jayapura";
echo "<br>";
var_dump($kota);
?>