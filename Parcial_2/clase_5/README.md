# Configurando XCode pluggins en VSCode

> 29.10.25

1. En VSCode en el apartado de extensiones, buscar `PHP Debug`
2. Instalar el [debugger para php](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug) de XCode, o bien el [Extension Pack](https://marketplace.visualstudio.com/items?itemName=xdebug.php-pack) que incluye tanto el plugin de debugger como el intellisense (para la sintaxis).
3. Agregar configuración para crear el `launch.json`

```
  php debug > add configuration > php > editar el Launch.json: Xdebug
```

---

## Notas generales

* Espacio en blanco en un archivo html: `nbsp;`
* Simbolo de copyright: `&copy;`

> William James: _"Es nuestra actitud al comienzo de algo difícil, más que cualquier otra cosa, lo que afectará a un resultado exitoso"._