# Instalación de Laravel

## Windows

Requisitos previos

- Asegurarse que `php.exe` este accesible en toda ruta configurando su path dentro de las variables de entorno del sistema.
```
Barra de búsqueda
 Buscar "variables de entorno" y seleccionar "Editar variables de entorno del sistema"
  Crear una nueva variable con el nombre "PHP_HOME" y en el valor colocamos la ruta de ejecutable
  Editar Path colocando %PHP_HOME% como nuevo valor
 Guardar cambios
```

Pasos

1. Habilitar la extension openssl en el php ini
```php.ini
; se remueve el punto y coma inicial
extension=openssl
```

2. Ejecutar lo siguiente en cmd o powershell
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "copy('https://composer.github.io/installer.sig', 'installer.sig');"
```

3. Comprobar hash
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
```

