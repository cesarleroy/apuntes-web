<?php
    if( isset($_COOKIE["key"]) ) {
    	echo "La cookie existe";
    } else {
	echo "Aún no existe";
	setcookie("key", "1234", time() + 30);
	echo "<br>...Ahora ya existe";
    }
?>
