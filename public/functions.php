<?php
$datos = explode(" ", trim($linea));
while($linea = fgets(STDIN)) {
    if()
}


switch($datos[0]){
case 'suma':
    $suma = $datos[1] + $datos[2];
    echo'La suma de los números es: ' $suma;
    break;
    case 'media':
        $media = $suma/2;
        echo 'La media de los números es: ' $media;
        break;
        case 'dif':
            $dif = $datos[1] - $datos[2];
            break;
            default: echo '<p>(Error) Operación no permitida</p>';
            if(count($datos[]) < 3){
            echo '<p>(Error) No dispongo de suficientes argumentos.</p>'
            }
}
?>