<?php
  function saludo() {
    echo "Hola";
  }

  saludo();   // así se llama: por su nombre, seguido de ()
?>


<?php
$nombreCiclo = "Desarrollo de Aplicaciones Web";
  function mostrarCiclo() {
    global $nombreCiclo;
    echo '<p>', $nombreCiclo, '</p>';
  }

  mostrarCiclo();

 //echo $nombreCiclo;

  // Al nombrar la variable dentro de una funcion , esta se verá afectada haciendo que no se vea fuera de una funcion
  //pasaria lo mismo con el call de la funcion que con el echo , por ello introducimos una variable superglobal

  ?>

<?php

  function contadorVisitas() {
    static $visitas = 0;
    $visitas++;
    echo '<p>Visita número ', $visitas, '</p>';
  }

  contadorVisitas();   // Visita número 1
  contadorVisitas();   // Visita número 2
  contadorVisitas();   // Visita número 3
?>
<?php
  define('NOMBRE_CENTRO', 'CIFP Carlos III');

  function pie() {
    // Sin "global": las constantes son accesibles en cualquier ámbito
    echo '<footer>', NOMBRE_CENTRO, '</footer>';
  }

  pie();
?>
<?php
  $totalCiclosMostrados = 0;

  function registrarVisita() {
    global $totalCiclosMostrados;
    $totalCiclosMostrados++;
  }

  registrarVisita();
  registrarVisita();
  registrarVisita();

  echo '<p>Ciclos mostrados: ', $totalCiclosMostrados, '</p>';   // 3

  /*¿Qué son las variables superglobales de PHP? Cita al menos dos y explica, en un comentario, en qué se parece su ámbito al de las constantes.
  ($_GET, $_POST, $_SERVER, $_SESSION…), que comparten esta misma propiedad: están disponibles en cualquier ámbito sin global. */
?>