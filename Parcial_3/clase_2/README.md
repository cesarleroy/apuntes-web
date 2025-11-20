# Controlador frontal y rutas

> 20.11.25

- Sobre escritura de reglas
- Instalación de Laravel
- Gestor de componentes
  * Maven y Gradle para Java
  * NuGet para .NET (C#)
  * Compose para PHP 

![Gestor de componentes](./gestor.png)

### Ataques web
- Cross Site Request Forgery: Falsificación de Peticiones en Sitios Cruzados `CSRF`
- Distributed Denial of Service: Denegación de Servicio Distribuido `DDoS`
- Cross Site Scripting: Secuencia de Comandos en Sitios Cruzados `XSS`


---

### Variables de entorno

- Rutas hacia ejecutables para ser encontrados por el sistema de línea de comandos
- Las aplicaciones de programación por componentes van en APPDATA
``` Win + R => AppData```

php -r "$expected = trim(file_get_contents('installer.sig')); $actual = hash_file('sha384', 'composer-setup.php'); if ($actual === $expected) { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"