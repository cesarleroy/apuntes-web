<?php

  function ejecutar($creds, $query) {
    # Conectarse y comprobar
    $conn = mysqli_connect($creds[0], $creds[1], $creds[2], $creds[3]);
    if (mysqli_connect_errno()) return false;
    
    # Codificación de carácteres
    mysqli_set_charset($conn, "utf8mb4");
    
    # Ejecutar la operación
    $res = mysqli_query($conn, $query);

    # Desconectarse
    mysqli_close($conn);

    return $res;
}

  function insertar($creds, $query) {
    # Conectarse y comprobar
    $conn = mysqli_connect($creds[0], $creds[1], $creds[2], $creds[3]);
    if (mysqli_connect_errno()) return false;
    
    # Codificación de carácteres
    mysqli_set_charset($conn, "utf8mb4");

    # Ejecutar la operación
    $res = mysqli_query($conn, $query);
    $id = mysqli_insert_id($conn);

    # Desconectarse
    mysqli_close($conn);

    return $id;
  }

  function seleccionar($creds, $query) {
    $registros = [];

    # Conectarse y comprobar
    $conn = mysqli_connect($creds[0], $creds[1], $creds[2], $creds[3]);
    if (mysqli_connect_errno()) return false;
    
    # Codificación de carácteres
    mysqli_set_charset($conn, "utf8mb4");

    # Ejecutar la operación
    $res = mysqli_query($conn, $query);

    # Recuperar registros
    while($registro = mysqli_fetch_row($res)) {
      $registros[] = $registro;
    }

    # Liberando objetos de datos empleados
    mysqli_free_result($res);

    # Desconectarse
    mysqli_close($conn);

    return $registros;
  }

// Al ser un archivo de librería, no se agrega la etiqueta de cierre