<?php
  include "mysqli_aux.php";
  $config = include __DIR__ . '/config.php';
  $SRV = $config['DB_SERV'];
  $USER = $config['DB_USER'];
  $PASS = $config['DB_PASS'];
  $DB = $config['DB_NAME'];
  $pag = '';


  if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["precio"]) && isset($_POST["descripcion"])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $QUERY = "UPDATE Producto SET 
              nombre = '$nombre',
              precio = $precio,
              descripcion = '$descripcion'
              WHERE id = $id";

    $id = ejecutar([$SRV, $USER, $PASS, $DB], $QUERY);

    $pag .= "<div class='mensaje-contenedor'>";
    if ($id) {
      $pag .= "<h1 class='exito'>Éxito</h1>";
      $pag .= "<p>Producto actualizado correctamente</p>";
    } else {
      $pag .= "<h1 class='error'>Error</h1>";
      $pag .= "<p>No se pudo actualizar el producto. Contacta con el Sugus ADMON</p>";
    }
    $pag .= "<a href='./index.php'>← Regresar al inventario</a>";
  } else {
    $pag .= "<div class='mensaje-contenedor'>";
    $pag .=  "<h1 class='error'>Error</h1>";
    $pag .=  "<p>Error en la consistencia de datos, chécalos tilin</p>";
    $pag .=  "<a href='./index.php'>← Regresar al inventario</a>";
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Actualizar</title>
  </head>
  <body>
    <?php echo $pag; ?>
  </body>
</html>