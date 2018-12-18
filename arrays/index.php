<?php
$kasutajad = array(); // tühi massiiv
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');

$lisakasutajad = array('mark','george');
echo '<pre>';
print_r($kasutajad);
print_r($lisakasutajad);
echo '</pre>';
//var_dump($kasutajad);