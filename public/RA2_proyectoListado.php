<?php
  $ciclos = ['DAW', 'DAM', 'ASIR'];
  echo $ciclos[0];   // DAW
  echo count($ciclos);  // 3
?>
<?php
  $curriculo = ['alumno' => 'Ana López', 'ciclo' => 'DAW'];
  echo $curriculo['alumno'];   // Ana López
?>
<?php
  $curriculos = [
    ['alumno' => 'Victor Montoya',    'ciclo' => 'DAW',  'foto' => 'https://youtu.be/curriculo1'],
  ];

  echo $curriculos[0]['alumno'];   // Ana López
?>
<?php
  function mostrarCurriculo(array $curriculo) {
    echo '<li>', $curriculo['alumno'], ' — ', $curriculo['ciclo'],
         ' — <a href="', $curriculo['video'], '">vídeo</a></li>';
  }
?>

<?php
 define('NOMBRE_CENTRO', 'CIFP Carlos III');
  echo '<h1>', NOMBRE_CENTRO, ' — Currículos</h1>';
  echo '<ul>';
  mostrarCurriculo($curriculos[0]);
  mostrarCurriculo($curriculos[1]);
  mostrarCurriculo($curriculos[2]);
  echo '</ul>';
?>