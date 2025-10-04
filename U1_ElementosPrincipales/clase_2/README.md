# 1. El Servidor Web

> 04.09.25

`http://127.0.0.1:80 --- http://localhost:80`
 
 * protocolo `http`
 * direccion `://127.0.0.1` o `://localhost`
 * puerto `:80`

Cliente (petición) ==> Servidor (respuesta)
Client (request) ==> Server (response)

Servidor (Socket de Entrada)
  
  - Respuesta: Response
  - Protocolo: IP Address
  - Comunicación: Port
  - Apache, Nginx, IIS, Tomcat

Cliente (Socket de salida)

  - Petición: Request
  - Navegador web

Protocolo `HTTP`, Lenguaje `HTML`

HTTP: HyperText Transfer Protocol
HTML: HyperText Markup Language

span

col span <--- una columna
row span <--- une filas


## Glosario

| Abreviación | Inglés                      | Español                            |
| ----------- | --------------------------- | ---------------------------------- |
| **URL**     | *Uniform Resource Locator*  | Localizador Uniforme de Recursos   |
| **DNS**     | *Domain Name System*        | Sistema de Nombres de Dominio      |
| **ISP**     | *Internet Service Provider* | Proveedor de Servicios de Internet |


## 1.1. Configuración de IIS en Windows

Prerequisitos:

- Visual C++ Redistributable
- Licencia válida de Windows

Pasos:

1. Acceder al `Panel de control`
    - `Programas y características`
2. Acceder a `Activar o desactivar las características de Windows` y activar lo siguiente
    - [x] `.NET Framework 3.5`
    - [x] `Internet Information Services`
      - [x] `World Wide Web Services`
        - [x] `Application Development Features`
          - [x] `CGI`


- Ruta de archivos del servidor en windows: `C:/inetpub/wwwroot`

### 1.1.1. Directorios Virtuales

- Para conectar otras carpetas con IIS:

```
WIN + R y escribir inetmgr
```

Una vez en inetmgr (IIS Manager)

```
- Server Sites 
  - Default Web Server 
    - Add Virtual Directory
      - Agregar Alias (add alias)
      - Agregar el Path Físico (add physical path)
```

Para añadir el path del directorio virtual, esté debe contener los permisos necesarios para los usuarios de IIS

```
- Directorio objetivo
  - Propiedades
    - Seguridad
      - Editar permisos
        - Añadir los usuarios IIS_IUSR & IIS
```

Añadir archivos a la carpeta de trabajo
Combinacion de tablas