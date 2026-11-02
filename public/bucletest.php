<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
$resultado = 0;
$numeros= 0;
while($datos[$numeros] != 0){
  $resultado += $datos[$numeros];
  $numeros++;
}
echo 'Se han sumado ' , count($numeros), 'números, dando como resultado un total de ' , $resultado;

?>