# Programación lado del servidor

> 09.10.25


## Instalación de PHP vía CGI para IIS

**Pasos**

1. Habilitar IIS (con CGI) 

```
    - Control Panel
      - Programas y Caracterìsticas
        - Activar o desactivar las características de Windows
          - [X] .NET Framework 3.5
          - [X] Internet Information Services
            - [X] World Wide Web Services 
              - [X] Aplication Development Features 
                - [X] CGI
```

2. Tener instalados `Microsfot Visual C++ 2015-2022 Redistributable`
3. Descargar e instalar [PHP NTS](https://windows.php.net/download/) (Non Thread Safe).
4. Crear el `php.ini`, copiar a partir de la plantilla `php.ini-development`
5. Editar el `php.ini` para configurar PHP y ser usado por IIS

```
    cgi.force_redirect = 0
    cgi.fix_pathinfo = 1
    fastcgi.impersonate = 1
    fastcgi.logging = 0
```

6. Configurar IIS para usar php mediante CGI. Abrir el administrador de IIS `inetmgr`
7. Agregar una asignación de modulo hacia `php_cgi.exe`.
8. Configurar para archivos y carpetas.
9. Crear un directorio de trabajo.

```
  WIN + R
    - INETMGR
      - Handler Mappgins
        - Add Module mapping
            Ruta de acceso de solicitudes [*.php]
            Modulo [FastCgiModule]
            Ejecutable [php-cgi.exe]
            Nombre [php_via_cgi]
            
          - Restricciones
            - Archivos o carpetas
```

> [!IMPORTANT]
> **Agregar PHP al Path**
> Mediante Interfaz Gráfica
```
└───Barra de búsqueda
    └───Buscar "variables de entorno" y seleccionar "Editar variables de entorno del sistema"
        └───Crear una nueva variable llamada "PHP_HOME" y en valor colocamos la ruta de ejecutable
            ├───Editar Path colocando %PHP_HOME% como nuevo valor
            └───Guardar cambios
```
> Mediante Línea de Comandos (CLI)
```cmd
 setx /M PHP_HOME "C:\php"
 setx /M PATH "%PATH%;%PHP_HOME%
```