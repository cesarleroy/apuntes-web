<?php
session_start();

$USER = "root@example";
$PASS = "admin";

if (isset($_REQUEST["logout"])) {
  session_unset();
  session_destroy();
  setcookie("recordar", "", time() - 3600, "/");
  unset($_COOKIE["recordar"]);
  header("Location: ./login.php");
  exit();
}

if (isset($_REQUEST["user"]) && isset($_REQUEST["pass"])) {
  if ($_REQUEST["user"] == $USER && $_REQUEST["pass"] == $PASS) {
    $_SESSION["user"] = $USER;
    $_SESSION["pass"] = $PASS;

    if (isset($_REQUEST["recordar"]) && $_REQUEST["recordar"] == "on") {
      setcookie("recordar", "on", time() + (86400 * 30), "/"); // 30 días
    } else {
      setcookie("recordar", "", time() - 3600, "/");
      unset($_COOKIE["recordar"]);
    }
  } else {
    header("Location: ./error.php");
    exit();
  }
}

if (!isset($_SESSION["user"])) {
  if (isset($_COOKIE["recordar"]) && $_COOKIE["recordar"] == "on") {
    $_SESSION["user"] = $USER;
    $_SESSION["pass"] = $PASS;
  } else {
    header("Location: ./login.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inicio</title>
  <style>
    body {
      height: 80vh;
      width: auto;
      font-family: system-ui;
      background-color: #f5f5f5;
    }
    
    body, #container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    #container {
      width: 60%;
      height: 50%;
      border: 1px solid black;
      margin-top: 6em;
      background-color: white;
      border-radius: 16px;
    }

    button {
      padding: 8px 20px;
      background-color: #e0e0e0;
      border: 1px solid #999;
      cursor: pointer;
      font-size: 13px;
      border-radius: 8px;
    }

    button:hover {
      background-color: #d0d0d0;
    }
  </style>
</head>

<body>
  <div id="container">
    <h1>Bienvenido <?php echo $USER; ?>!</h1>
    <form method="POST" action="./home.php">
      <input type="hidden" name="logout" value="1">
      <button type="submit">Cerrar sesión</button>
    </form>
  </div>
</body>

</html>