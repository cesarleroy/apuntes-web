# Configuración para MySQLi

MySQLi ( **i** por _improved_) es una extensión que proporciona una interfaz para conectarse a una base de datos de MySQL (MariaDB y otros compatibles con MySQL). Soporta modo procedural, es decir que no se necesita POO.

Paso para configurar

1. Editar el archivo `php.ini` configurado [previamente](../clase_1/config.md)

2. Buscar las siguientes líneas:
```php.ini
  ;extension_dir="ext"
  ;extension=mysqli
```

3. Descomentarlas removiendo el punto y coma inicial
```php.ini
  extension_dir="ext"
  extension=mysqli
```

4. Guardar cambios y reiniciar el servidor.