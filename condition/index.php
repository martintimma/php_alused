<?php
// tingimuslaused
// if(tingimus {
// tegevused, mis toimuvad, kui tingimus kehtib
// } else {
// tegevused, mis toimuvad, kui tingimus ei kehti
// }

echo "<h4>Tingimuslaused</h4>";

$arv = rand(0, 100); //juhuslik arv 0st 100ni

if($arv % 2 == 0) {
    //antud arv on paaris ja ta on roheline
    echo "<p style='color: green'>".$arv."</p>";
} else {
    // arv paaritu ja punane
    echo "<p style='color: red'>".$arv."</p>";
}