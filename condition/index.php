<?php
// tingimuslaused

echo '<h4>Tingimuslaused</h4>';

$foor = 'kollane';

switch ($foor) {
    case 'punane':
        echo '<p style="color: red">punane!</p>';
        break;
    case 'kollane':
        echo '<p style="color: yellow">kollane!</p>';
    break;
    case 'roheline':
        echo '<p style="color: green">roheline!</p>';
    break;
    default:
        echo '<p>mingi teine</p>';
        break;
}