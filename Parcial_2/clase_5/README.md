# Configurando XCode pluggins en VSCode

> 29.10.25

## Linux

Trabajando con Arch:

1. Instalar Xdebug
```zsh
  sudo pacman -S xdebug
```

2. Editar el archivo `xdebug.ini`, en mi caso en la ruta `/etc/php/conf.d`
```php.ini
  zend_extension=xdebug.so
  xdebug.remote_enable=on
  xdebug.remote_host=127.0.0.1
  xdebug.remote_port=9003
  xdebug.remote_handler=dbgp
  xdebug.mode=debug
```

3. Guardar cambios y verificar ejecutando `php -v`
```zsh
$❯ php -v

PHP 8.4.14 (cli) (built: Oct 22 2025 14:58:39) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.4.14, Copyright (c) Zend Technologies
    with Xdebug v3.4.5, Copyright (c) 2002-2025, by Derick Rethans
```
Lo anterior nos indica que la extensión xdebug ha sido correctamente instalada y ya solo debemos continuar con la configuración en VSCode

## Windows

1. En un archivo de php, ejecutar la función `phpinfo()` e ir a la página donde se renderiza la información y copiarla. 
   Otra alternativa es ejecutar el comando `php -i` y copiar toda la información.

2. Pegar la información en el [Wizard](https://xdebug.org/wizard) de Xdebug y darle en analizar, esté nos indicará que versión de xdebug descargar.
3. Una vez descargado, moverlo a la ruta `ext` en donde se ubique php, y renombrarlo como `php_xdebug.dll`
4. Actualizar el `php.ini` y agregar la línea:
```php.ini
  zend_extension = xdebug
```
5. Para terminar, añadir estas configuraciones para xdebug al php.ini
```php.ini
  ; === XDEBUG ===
  xdebug.mode = debug
  xdebug.client_host = 127.0.0.1              
  xdebug.client_port = 9003
```

6. Guardar cambios y verificar ejecutando `php -v`
```zsh
PS C:\Users\cesar> php -v
PHP 8.4.13 (cli) (built: Sep 23 2025 15:17:27) (NTS Visual C++ 2022 x64)
Copyright (c) The PHP Group
Zend Engine v4.4.13, Copyright (c) Zend Technologies
    with Xdebug v3.4.7, Copyright (c) 2002-2025, by Derick Rethans
```
Lo anterior nos indica que la extensión xdebug ha sido correctamente instalada y ya solo debemos continuar con la configuración en VSCode

## Configurando VSCode

1. En VSCode en el apartado de extensiones, buscar `PHP Debug`
2. Instalar el [debugger para php](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug) de XCode, o bien el [Extension Pack](https://marketplace.visualstudio.com/items?itemName=xdebug.php-pack) que incluye tanto el plugin de debugger como el intellisense (para la sintaxis).
3. Agregar configuración para crear el `launch.json`

```
  abrir un archivo php > debug > add configuration > editar el Launch.json: Xdebug
```

---

## Notas generales

* Espacio en blanco en un archivo html: `nbsp;`
* Simbolo de copyright: `&copy;`

> William James: _"Es nuestra actitud al comienzo de algo difícil, más que cualquier otra cosa, lo que afectará a un resultado exitoso"._