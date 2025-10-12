<?php
$alumnos = [
  "2022305782" => "Hope Hawkings",
  "2024047668" => "Perry Ybarra",
  "2024886923" => "Ronni Novello",
  "2023263151" => "Sandy Andrick",
  "2020961050" => "Kincaid Emms",
  "2023855071" => "Isadore Gounard",
  "2024759895" => "Suzie Matyushenko",
  "2023939116" => "Janis Petrovykh",
  "2025808006" => "Paten Lammertz",
  "2022578016" => "Zsazsa Killingbeck"
];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <table border="1px">
    <tr>
      <th>Boleta</th>
      <th>Nombre</th>
      <th>Calificación</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($alumnos as $boleta => $nombre): ?>
      <!-- DESDE AQUI MI PA -->
      <tr>
        <td><?php echo $boleta ?></td>
        <td><?php echo $nombre ?></td>
        <td><input id="c<?php echo $i;
                        $i++; ?>" value="0" type="number" min=0 max=10></td>
      </tr>
      <!-- HASTA AQUI PA -->
    <?php endforeach ?>
  </table>
  <button onclick="calcular()">Calcular Promedio</button>

  <script>
    function calcular() {
      let c1 = document.getElementById("c1");
      let v1 = parseInt(c1.value);
      let c2 = document.getElementById("c2");
      let v2 = parseInt(c2.value);
      let c3 = document.getElementById("c3");
      let v3 = parseInt(c3.value);
      let c4 = document.getElementById("c4");
      let v4 = parseInt(c4.value);
      let c5 = document.getElementById("c5");
      let v5 = parseInt(c5.value);
      let c6 = document.getElementById("c6");
      let v6 = parseInt(c6.value);
      let c7 = document.getElementById("c7");
      let v7 = parseInt(c7.value);
      let c8 = document.getElementById("c8");
      let v8 = parseInt(c8.value);
      let c9 = document.getElementById("c9");
      let v9 = parseInt(c9.value);
      let c10 = document.getElementById("c10");
      let v10 = parseInt(c10.value);

      let promedio = (v1 + v2 + v3 + v4 + v5 + v6 + v7 + v8 + v9 + v10) / 10;

      alert(`El promedio grupal es: ${promedio}`);
    }
  </script>
</body>

</html>