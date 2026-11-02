<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
$filas = $datos[0];
$columnas = $datos[1];
echo '<table border="solid 1px">';
    for($i1=0; $i1<$filas; $i1++){
        echo '<tr>';
    for($i2=0; $i2<$columnas; $i2++){
        echo '<td></td>';
    }
    echo '</tr>';
}
echo '</table>';
?>