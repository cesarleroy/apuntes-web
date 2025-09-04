# Crear Directorios **Virtuales**
 
*Crearemos un directorio virtual que se ubicará en una carpeta de trabajo en tus documentos, por ejemplo **trabajo**, siendo accedido como `http://TU_URL/trabajo/` (dónde TU_URL sera sustituida por `localhost` o `127.0.0.1` para pruebas locales).*
 
## Para linux con apache
 
- Editamos el archivo de configuración

```bash
    sudo geany /etc/apache2/apache2.conf
```
 
- Buscamos la sección

```XML
    <IfModule alias_module>
```
 
- Sí no existe se agrega. Ahí escribimos lo siguiente:

```XML
    <IfModule alias_module>
        Alias /trabajo "/home/usuario/trabajo/"
    </IfModule>
    <Directory "/home/usuario/trabajo">
        Options Indexes MultiViews
        AllowOverride None
        Order allow,deny
        Allow from all
        Require all granted
    </Directory>
```
 
- Reiniciamos el servidor para que los cambios surtan efecto.

```bash
    sudo /etc/init.d/apache2 restart
```
 
*No se nos olvide crear la carpeta virtual **trabajo** en el directorio de usuario.*
 
- Dar permisos de lectura y ejecución al directorio home del usuario.

```bash
    cd /home
    sudo chmod 755 TU_DIR_USUARIO
```
 
- Es todo. Hay que comprobar el acceso a un archivo php en el directorio virtual desde el navegador.

```
    http://localhost/TU_DIR_VIRTUAL/tu_archivo_prueba.php
```
