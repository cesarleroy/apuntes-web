# Programación lado del servidor

> 09.10.25


## Instalación de PHP vía CGI para IIS

**Pasos**

1. Habilitar IIS (con CGI) 

```
    Control Panel 
        > Aplicaciones y Programas 
            > Activar o desactivar 
                > Internet Information Services 
                    > World Wide Web Services 
                        > Aplication Development Features 
                            > CGI
```

2. Visual C++ Redistributable (2015-2022).
3. Descargar e instalar [PHP](https://windows.php.net) NTS.
4. php.ini, crear a partir de la plantilla `php.ini-development`
5. Configurar PHP para ser usado por IIS, editar `php.ini`

```
    cgi.force_redirect = 0
    cgi.fix_pathinfo = 1
    fastcgi.impersonate = 1
    fastcgi.logging = 0
```

6. Configurar IIS para usar php mediante CGI. Abrir el administrador de ISS `inetmgr`

7. Agregar una asignación de modulo hacia `php_cgi.exe`.

```
    INETMGR 
        > Module mapping
          > Asignaciones de controlador
            Ruta de acceso de solicitudes [*.php]
            Modulo [FastCgiModule]
            Ejecutable [php-cgi.exe]
            Nombre [php_via_cgi]
            
            Restricciones > Archivos o carpetas

```

8. Configurar para archivos y carpetas.
9. Crear un directorio de trabajo.

