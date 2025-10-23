<?php

?>

<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      body {
        font-family: system-ui;
      }
    </style>
  </head>
  <body>
    <h1>Bienvenido!</h1>
    <?php foreach ($_REQUEST as $key => $value): ?>
      <p><?php echo "key: " . $key . " => value: " . $value; ?></p>
    <?php endforeach ?>
    <h4><?php echo isset($_REQUEST["recordar"]) ? "si recuerda" : "no recuerda"; ?></h4>
  </body>
</html>
