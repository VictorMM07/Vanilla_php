<?php
function miSort(array &$miArray) : array{
    sort($miArray);
    return $miArray;
}
$ciclos = ['DAW','ASIR','DAM'];
$ciclos = miSort($ciclos);
print_r($ciclos);
?>