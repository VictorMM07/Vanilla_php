 <?php
  $horasCiclo    = 2000;
  $horasPorAnio  = 700;
  $horasCursadas = 0;
  $anios         = 0;

  while ($horasCursadas < $horasCiclo) {
    $horasCursadas += $horasPorAnio;
    $anios++;
  }

  echo '<p>Años necesarios: ', $anios, '</p>';   // 3
?> 
 <?php
   $curriculosPublicados = [
     ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtube.com'],
     ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
     ['alumno' => 'Pablo Ruiz',   'ciclo' => 'DAW',  'video' => ''],
     ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
   ];
 ?>
 <table>
   <tr><th>Alumno</th><th>Vídeo</th></tr>
   <?php foreach ($curriculosPublicados as $curriculo): ?>
     <?php if ($curriculo['video'] === '') { continue; } 
     //La condicion presenta que si en el array la parte de video esta vacia continue al siguiente
     ?>
     <tr class="con-video">
       <td><?= $curriculo['alumno'] ?></td>
       <td><a href="<?= $curriculo['video'] ?>">vídeo</a></td>
     </tr>
   <?php endforeach; ?>
 </table>

<?php
  echo '<select name="promocion">';
  for ($anio = 2020; $anio <= 2025; $anio++) {
    echo '<option value="', $anio, '">', $anio, '</option>';
  }
  echo '</select>';
?>
