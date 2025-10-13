<?php

  $np = 0;
  $promedio = 0;
  $valores = [];
  $reprobados = [];
  $aprobados = [];

  function getNombre($combo) {
    $nueva = "";
    for ($i = 3; $i < strlen($combo); $i++) {
      $nueva .= $combo[$i];
    }
    return $nueva;
  }

  function limpiar($arreglo) {
    $limpio = [];
    foreach ($arreglo as $clave => $valor) {
      if ($clave == "__test") continue;
      $limpio[getNombre($clave)] = $valor;
    }
    return $limpio;
  }

  $datos = limpiar($_REQUEST);

  foreach ($datos as $alumno => $nota) {
    if ($nota == "NP") {
      $np++;
      continue;
    }

    $valores[] = $nota;
    $promedio += $nota;

    if ($nota < 6) {
      $reprobados[] = $alumno;
      continue;
    }
    $aprobados[] = $alumno;
  }
  
  $cantidad = count($datos) - $np;
  $num_repro = count($reprobados);
  $promedio = round($promedio / $cantidad, 2);
  $num_aprob = $cantidad - $num_repro;
  $por_repro = round(($num_repro * 100) / $cantidad, 2);
  $por_aprob = 100 - $por_repro;
  $nota_max = max($valores);
  $nota_min = min($valores);
  
  $aux = max($num_aprob, $num_repro);

  for ($i = $num_aprob; $i < $aux; $i++) {
    $aprobados[] = ".";
  }

  for ($i = $num_repro; $i < $aux; $i++) {
    $reprobados[] = ".";
  }

  $datos["."] = "-";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      body {
        font-family: Arial, sans-serif;
        height: 100%;
        width: auto;
        padding: 0 16px;
        margin: 0;
	color: #0d1b2a;
	background-color: #e0e1dd;
      }

      #principal {
        width: 100%;
	height: 450px;
	text-align: center;
	border: 1px solid black;
	border-collapse: collapse;
	background-color: #778da9;
      }

      #encabezado, #fila-2 {
	background-color: #1b263b;
	color: #e0e1dd;
      }

      .importante {
	color: #778da9;
      }

      .alerta {	
	color: #d6636a;
      }

      #tabla-izq, #alumnos {
        margin: 0 auto;
        border: 1px solid black;
	border-collapse: collapse;
	font-size: 18px;
	background-color: #e0e1dd;
      }

      #tabla-izq{
	width: 60%;
      }

      #alumnos {
	width: 75%;
      }

      #tabla-izq tr:nth-child(odd), #alumnos tr:nth-child(odd) {
	background-color: #adb5bd;
      }

      .dato {
      	font-size: 24px;
      }

      .valor {
      	font-size: 36px;
      }


      #fila-3 td {
	border-top: 1px solid black;
      }
	
      #fila-3 > td {
	border-right: 1px solid black;
      }


    </style>
  </head>
  <body>

    <h1 id="title">Estadísticas</h1>
    <table id="principal">
      <!-- Encabezado -->
      <tr id="encabezado">
        <td class="dato">Alumnos contabilizados</td>
        <td class="dato">Aprobados</td>
        <td class="dato">Reprobados</td>
        <td class="dato">Con NP</td>
        <td class="dato">Aprovechamiento general</td>
      </tr>
      <!-- Estadísticas principales -->
      <tr id="fila-2">
        <td class="valor importante"><?php echo $cantidad; ?></td>
        <td class="valor"><?php echo $num_aprob . "(". $por_aprob . "%)"; ?></td>
        <td class="valor alerta"><?php echo $num_repro . "(". $por_repro . "%)"; ?></td>
        <td class="valor alerta"><?php echo $np; ?></td>
        <td class="valor importante"><?php echo $promedio; ?></td>
      </tr>

      <!-- Fila 3: Otras estadísticas y alumnpos-->
      <tr id="fila-3">
	<td colspan="2">
          <table id="tabla-izq" border>
            <tr>
              <td>Mejor calificación</td>
              <td><?php echo $nota_max;?></td>
            </tr>
            <tr>
              <td>Peor calificación</td>
              <td><?php echo $nota_min;?></td>
            </tr>
            <tr>
              <td rowspan="<?php echo $num_repro;?>">
		Alumnos en área de oportunidad
	      </td>
              <td><?php
		if ($num_repro >= 1) echo $reprobados[0];
		else echo "---";
	      ?>
	      </td>
            </tr>
            <?php for($i = 1; $i < $num_repro; $i++): ?>
              <tr>
                <td><?php echo $reprobados[$i]; ?></td>
              </tr>
            <?php endfor ?>
          </table>
        </td>

	<td colspan="3">
	  <h2>Alumnos</h2>
	  <table id="alumnos" border>
	    <tr>
	      <th colspan="2">Aprobados</th>
	      <th colspan="2">Reprobados</th>
	    </tr>
	    <?php for($i = 0; $i < $aux; $i++): ?>
	      <tr>
	        <td><?php echo $aprobados[$i]; ?></td>
	        <td><?php echo $datos[$aprobados[$i]]; ?></td>
	        <td><?php echo $reprobados[$i]; ?></td>
	        <td><?php echo $datos[$reprobados[$i]]; ?></td>
	      </tr>
	    <?php endfor ?>
	  </table>
	</td>
      </tr>
    </table>
 </body>
</html>