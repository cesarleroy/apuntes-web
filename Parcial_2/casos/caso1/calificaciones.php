<?php
$alumnos = [
  "Oliver",
  "Samanta",
  "Alex",
  "Miguel",
  "Jose",
  "Elisa",
  "Megan",
  "Kimberly",
  "Aaron",
  "Pepe"
];

$calificaciones = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "NP"];
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
    }

    h1 {
      text-align: center;
    }	

    #formulario {
      display: block;
      margin: auto;
      width: 40%;
      font-size: 18px;
    }

    #calificaciones {
      width: 80%;
      margin: 12px auto;
      text-align: center;
      border: 1px solid black;
      border-collapse: collapse;
    }

    select {
      width: 40%;
      font-size: 18px;
    }

    #btn-enviar {
      font-size: 16px;
      display: block;
      margin: 12px auto;
    }
  </style>
</head>

<body>

  <h1>Mis alumnos</h1>
  <form id="formulario" method="POST" action="estadisticas.php">
    <table border id="calificaciones">
      <tr>
        <th>Nombre</th>
        <th>Calificación</th>
      </tr>

      <?php foreach ($alumnos as $alumno): ?>
        <tr>
          <td>
            <label><?php echo $alumno; ?></label>
          </td>
          <td>
            <select name="cbo<?php echo $alumno; ?>">
              <?php foreach ($calificaciones as $calificacion): ?>
                <option><?php echo $calificacion; ?></option>
              <?php endforeach ?>
            </select>
          </td>
        </tr>
      <?php endforeach ?>
    </table>

    <input id="btn-enviar" type="submit" value="Enviar">
  </form>

</body>
</html>
