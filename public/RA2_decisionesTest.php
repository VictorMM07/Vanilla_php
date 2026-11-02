<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
$op = $datos[0]

$resultado = 0;
  switch ($op) {
    case 'x':
     $resultado = $datos[0] * $datos[1] ;
      
      break;
      case '-':
     $resultado = $datos[0] - $datos[1] ;
      
      break;
    case '+':
      $resultado = $datos[0] + $datos[1] ;
       
      break;
      case ':':
        $resultado = $datos[0]/$datos[1] ;

       break;
  }
  echo '<p>'$datos[0], $op ,$datos[1] , "= " ,$resultado'</p>';
?>