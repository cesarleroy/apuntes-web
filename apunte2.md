`http://127.0.0.1:80`

protocolo + direccion + pto

`http://localhost:80`

protocolo + alias + pto

DNS: Domain Name Service
ISP: Internet Service Provider

- Windows:

Prerequisitos:
    - Visual C++ Redistributable
Pasos:
    - Panel de control > Programas y características
    - Activar o desactivar las características de Windows
        - .NET Framework 3.5
        - Internet Information Services
            - WWW > Application Development Features > CGI

Cliente ----> SRV Web

Web: Apache, Nginx, IIS

 Socket (Entrada)
    - Protocolo: IP Address
    - Comunicación: Port
    - Respuesta: Response

Cliente (Salida)
    - Petición: Request

Protocolo HTTP, Lenguaje HTML

HTTP: HyperText Transfer Protocol
HTML: HyperText Markup Language

Ruta de archivos del servidor en windows
`C:/inetpub/wwwroot`

Conectar otras carpetas con IIS
    - win + r > inetmgr

INETMRG
    - Server > Sites > Default Web Server > Add Virtual Directory
        - Add alias > Physical pathi
    - vdir > propiedades > seguridad > editar permisos > IIS_IUSR & IIS

añadir archivos a la carpeta de trabajo
