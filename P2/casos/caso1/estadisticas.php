<?php
  $aprobados = 0;
  $np = 0;
  $promedio = 0;
  
  foreach($_REQUEST as $alumno => $nota) {
    if ($nota > 5) $aprobados++;


    if ($nota != "NP") {
      $promedio += $nota;
      continue;
    }

    $np++;
  }
  
  $cantidad = count($_REQUEST) - $np;
  $promedio /= $cantidad;
  $reprobados = $cantidad - $aprobados;
  $por_repro = ($reprobados * 100) / $cantidad;
  $por_apro = 100 - $por_repro;
  
  echo "El promedio grupal es: " . $promedio;
  echo "<br>Hay " . $np . " alumnos con NP";
  echo "<br>Cantidad de alumnos para las estadísticas: " . $cantidad;
  echo "<br>La cantidad de aprobados es: " . $aprobados;
  echo "<br>La cantidad de reprobados es: " . $reprobados;
  echo "<br>Porcentaje de reprobados: %" . $por_repro;
  echo "<br>Porcentaje de aprobados: %" . $por_apro;
?>
