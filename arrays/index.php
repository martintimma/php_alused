<?php
$kasutajad = array(); // tühi massiiv
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');
$lisakasutajad = array('mark','george');

//massiivi pikkus
$kasutajadkokku = count($kasutajad);
for($i = 0; $i < 3; $i++) {
    echo $kasutajad[$i].'<br>';
}
array_shift($kasutajad);
for($i = 0; $i < 3; $i++) {
    echo $kasutajad[$i] . '<br>';
}

$uuedkasutajad = array_merge($kasutajad, $lisakasutajad);
for($i = 0; $i < $uuedkasutajad; $i++) {
    echo $uuedkasutajad[$i] . '<br>';
}

