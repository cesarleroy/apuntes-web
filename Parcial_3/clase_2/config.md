# Instalación de Laravel

Requisitos previos

- Servidor web: [Apache](/Parcial_2/clase_1/config.md), Nginx, IIS
- [PHP](/Parcial_2/clase_1/config.md) (Correctamente configurado con su ruta en el path)
- Composer
- Base de Datos
- Git
- Extensiones requeridas (Habilitarlas en el php.ini)
  - curl
  - ctype
  - fileinfo
  - mbstring
  - openssl
  - pdo y pdo_mysql
  - tokenizer
  - xml
  - zip 

## Instalación de Composer

### Windows

1. Ejecutar lo siguiente en cmd
```cmd
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php -r "copy('https://composer.github.io/installer.sig', 'installer.sig');"
```

2. Comprobar hash
```cmd
  php -r "$expected = trim(file_get_contents('installer.sig')); $actual = hash_file('sha384', 'composer-setup.php'); if ($actual === $expected) { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
```

3. Ejecutar el instalador, obtener el archivo `phar` y moverlo al directorio de datos del usuario
```cmd
  md "%APPDATA%\Composer"
  php composer-setup.php --install-dir="%APPDATA%\Composer" --filename=composer.phar
```

4. Envolver el `composer.phar` en un `BAT` para poder ser invocado desde la línea de comandos
```cmd
  cd %APPDATA%\Composer
  echo @php "%~dp0composer.phar" %*>composer.bat
```

5. Limpiar archivos de instalación
```cmd
  php -r "unlink('composer-setup.php'); unlink('installer.sig');"
```

6. Agregar el Composer al path
```cmd
  setx /M PATH "%PATH%;%APPDATA%\Composer"
```

7. Verificar instalación desde cualquier ruta
```cmd
  composer --version
```

### Linux