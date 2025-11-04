# Configurando XCode pluggins en VSCode

> 29.10.25

## Linux

Trabajando con una la distribución Arch:

1. Instalar Xdebug
```
  sudo pacman -S xdebug
```

2. Editar el archivo `xdebug.ini`, en mi caso en la ruta `/etc/php/conf.d`
```
  zend_extension=xdebug.so
  xdebug.remote_enable=on
  xdebug.remote_host=127.0.0.1
  xdebug.remote_port=9003
  xdebug.remote_handler=dbgp
  xdebug.mode=debug
```

3. Guardar cambios y verificar ejecutando `php -v`
```SHELL
$❯ php -v

PHP 8.4.14 (cli) (built: Oct 22 2025 14:58:39) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.4.14, Copyright (c) Zend Technologies
    with Xdebug v3.4.5, Copyright (c) 2002-2025, by Derick Rethans
```
Lo anterior nos indica que la extensión xdebug ha sido correctamente instalada y ya oslo debemos continuar con la configuración en VSCode

## Windows

4. En VSCode en el apartado de extensiones, buscar `PHP Debug`
5. Instalar el [debugger para php](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug) de XCode, o bien el [Extension Pack](https://marketplace.visualstudio.com/items?itemName=xdebug.php-pack) que incluye tanto el plugin de debugger como el intellisense (para la sintaxis).
6. Agregar configuración para crear el `launch.json`

```
  php debug > add configuration > php > editar el Launch.json: Xdebug
```

---

## Notas generales

* Espacio en blanco en un archivo html: `nbsp;`
* Simbolo de copyright: `&copy;`

> William James: _"Es nuestra actitud al comienzo de algo difícil, más que cualquier otra cosa, lo que afectará a un resultado exitoso"._