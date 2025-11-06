<?php ini_set('display_errors', E_ALL);

session_start();

$SUDO = "root@sugus";
$PASS = "admin";

if (isset($_REQUEST["logout"])) {
  session_unset();
  session_destroy();
  setcookie("recordar", "", time() - 1, "/");
  unset($_COOKIE["recordar"]);
  header("Location: ./login.php");
  exit();
}

if (isset($_REQUEST["user"]) && isset($_REQUEST["pass"])) {
  if ($_REQUEST["user"] == $SUDO && $_REQUEST["pass"] == $PASS) {
    $_SESSION["user"] = $SUDO;
    $_SESSION["pass"] = $PASS;

    if (isset($_REQUEST["recordar"]) && $_REQUEST["recordar"] == "on") {
      setcookie("recordar", "on", time() + (60 * 10), "/");
    } else {
      setcookie("recordar", "", time() - 1, "/");
      unset($_COOKIE["recordar"]);
    }
  } else {
    header("Location: ./error.php");
    exit();
  }
}

if (!isset($_SESSION["user"])) {
  if (isset($_COOKIE["recordar"]) && $_COOKIE["recordar"] == "on") {
    $_SESSION["user"] = $SUDO;
    $_SESSION["pass"] = $PASS;
  } else {
    header("Location: ./login.php");
    exit();
  }
}

include "mysqli_aux.php";

$config = include __DIR__ . '/config.php';
$SERVER = $config['DB_SERV'];
$USER = $config['DB_USER'];
$PASSWORD = $config['DB_PASS'];
$DATABASE = $config['DB_NAME'];

$datos = seleccionar([$SERVER, $USER, $PASSWORD, $DATABASE], "SELECT * FROM Producto");
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>El Sugus</title>
  </head>
  <body>
    <div class="container">
      <h1>Abarrotes "El Sugus"</h1>
      <a href="#insertar" class="btn-agregar">+ Nuevo producto</a>

      <!-- Modal Insertar -->
      <div id="insertar" class="modal">
        <div class="modal-caja">
          <h2>Registrar producto</h2>
          <form id="insert" action="agregar.php" method="POST">
            <label>Nombre</label>
            <input type="text" name="nombre" required>
            
            <label>Precio</label>
            <input type="number" name="precio" min="0" max="9999" required>
            
            <label>Descripción</label>
            <input type="text" name="descripcion">
          </form>
          <button type="submit" form="insert">Agregar producto</button>
          <a href="#">Cancelar</a>
        </div>
      </div>

      <!-- Modal Actualizar -->
      <div id="actualizar" class="modal">
        <div class="modal-caja">
          <h2>Actualizar Producto</h2>
          <form id="update" action="actualizar.php" method="POST">
            <label>ID del Producto</label>
            <input type="number" name="id" id="id-actualizar" readonly>

            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre-actualizar" required>
            
            <label>Precio</label>
            <input type="number" name="precio" id="precio-actualizar" min="0" max="9999" required>
            
            <label>Descripción</label>
            <input type="text" name="descripcion" id="descripcion-actualizar">
          </form>
          <button type="submit" form="update">Actualizar producto</button>
          <a href="#">Cancelar</a>
        </div>
      </div>

      <!-- Modal Eliminar -->
      <div id="eliminar" class="modal">
        <div class="modal-caja">
          <h2 id="nombre-eliminar">¿Está seguro de eliminar el producto?</h2>
          <form id="delete" action="eliminar.php" method="POST">
            <input type="hidden" name="id" id="id-eliminar">
          </form>
          <button type="submit" form="delete">Eliminar producto</button>
          <a href="#">Cancelar</a>
        </div>
      </div>

      <!-- Tabla de inventario -->
      <table id="inventario">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Descripción</th>
          <th colspan="2">Acciones</th>
        </tr>
        <?php foreach($datos as $dato): ?>
        <tr>
          <td><?php echo $dato[0] ?></td>
          <td><?php echo $dato[1] ?></td>
          <td><?php echo $dato[3] ?></td>
          <td><?php echo $dato[2] ?></td>
          <td>
            <a href="#actualizar" 
               class="btn-actualizar"
               onclick="
               cargarIdProducto(<?php echo $dato[0]; ?>); 
               cargarDatos(
               '<?php echo ($dato[1]); ?>', 
               '<?php echo ($dato[2]); ?>', 
               <?php echo $dato[3]; ?>);"
            >Actualizar
            </a>
          </td>
          <td>
            <a href="#eliminar" 
               class="btn-eliminar"
               onclick="
               cargarIdProducto(<?php echo $dato[0]; ?>); 
               cargarNombreProducto('<?php echo $dato[1]; ?>');"
            >Eliminar
            </a>
          </td>
        </tr>
        <?php endforeach ?>
      </table>

      <div id="container-exit">
        <form method="POST" action="./index.php">
          <input type="hidden" name="logout" value="1">
          <button id="logout" type="submit">Cerrar Sesión</button>
        </form>
      </div>

    </div>

    <script>
      function cargarIdProducto(idProducto) {
        const inputActualizar = document.getElementById('id-actualizar');
        if (inputActualizar) inputActualizar.value = idProducto;
        
        const inputEliminar = document.getElementById('id-eliminar');
        if (inputEliminar) inputEliminar.value = idProducto;
      }

      function cargarNombreProducto(nombreProducto) {
        document.getElementById('nombre-eliminar').textContent = 
          '¿Está seguro de eliminar el producto "' + nombreProducto + '"?';
      }

      function cargarDatos(nombreProducto, descripcionProducto, precioProducto) {
        document.getElementById('nombre-actualizar').value = nombreProducto;
        document.getElementById('descripcion-actualizar').value = descripcionProducto;
        document.getElementById('precio-actualizar').value = precioProducto;
      }
    </script>
  </body>
</html>