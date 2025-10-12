<?php
  $alumnos = ["Oliver", "Samanta", "Alex", "Miguel", "Jose", 
  	      "Elisa", "Megan", "Kimberly", "Aaron", "Pepe"];

  $calificaciones = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "NP"];
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <style>

    </style>
  </head>
  
  <body>
    
    <h1>Mis alumnos</h1>
    <form method="POST" action="estadisticas.php">
      <table border>
	<tr>
	  <th>Nombre</th>
	  <th>Calificación</th>
	</tr>
	
	<?php foreach($alumnos as $alumno): ?>
        <tr>
	  <td>
	    <label><?php echo $alumno;?></label>
	  </td>
	  <td>
	    <select name="cbo<?php echo $alumno;?>">
	      <?php foreach($calificaciones as $calificacion): ?>
	      <option><?php echo $calificacion; ?></option>
	      <?php endforeach ?>
	    </select>
	  </td>
	</tr>
	<?php endforeach ?>
      
      </table>

      <input type="submit">
    </form>
  
  </body>
</html>
