<?php
$estudiantes = ['Buendia','Borrero','Delgado','Martinez','Cegarra'];
$buscado = 'Buendia';
$encontrado = false;
foreach($estudiantes as $estudiante){
    if  ($estudiantes === $buscado){
        $encontrado = true;
        break;
    }
}
if ($encontrado){
    echo "El apellido " , $buscado, "se encuentra en el array";
}else{
     echo "El apellido " , $buscado ," no se encuentra en el array";
}

?>