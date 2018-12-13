<?php
// muutujate defineerimine
// $muutujaNimi = väärtus;
$taisArv = 7;
$reaalarv = 3.14;
$sone = "7";
$toevaartusTrue = true;
$toevaartusFalse = false;

echo "Täisarv = ".$taisArv."<br>";
echo "Reaalarv = ".$reaalarv."<br>";
echo "sone = ".$sone."<br>";
echo "Tõeväärtus true = ".$toevaartusTrue."<br>";
echo "Tõeväärtus false = ".$toevaartusFalse."<br>";

echo gettype($sone)."<br>";
settype($sone, "int");
echo gettype($sone)."<br>";
