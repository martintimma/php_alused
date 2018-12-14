<?php
/*
 * function funktsiooniNimi($param1m $param2, ..., $param5){
 * tegevused, mis toimuvad funktsiooni sees
 * }
*/
$arv = 442158755745;
function numbriKordumine($arv, $kontrollNumber){
    echo 'Arv on '.$arv.'<br>';
// leia, mitu korda siin esinemas number 5;
    $numberKokku = 0;
    while($arv != 0) {
        $number = $arv % 10;
        if($number == $kontrollNumber){
            $numberKokku = $numberKokku +1; //$numberKokku++;
        }
        $arv = $arv / 10;
        settype($arv, 'int');
    }
    echo 'Number '.$kontrollNumber.' esineb antud arvus '.$numberKokku.' korda<br>';
}

numbriKordumine(442158755745, 5);
numbriKordumine(234234948324, 4);