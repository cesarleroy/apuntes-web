<?php
  if( count($_REQUEST) > 0 ) {
    echo "Procesando " . 
    count($_REQUEST) . " datos" .
    "<br>Con el valor: " . 
    $_REQUEST["dato"];
  } else { 
    echo "Acceso denegado";
  } 
?>
