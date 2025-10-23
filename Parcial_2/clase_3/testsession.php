<?php
    session_start();
    if ( isset($_SESSION["key"]) ) {
    	echo "Sesión iniciada";
    } else {
    	echo "Creando sesión";
	$_SESSION["key"] = "algo";
    }
?>
