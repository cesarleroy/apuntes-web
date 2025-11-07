# Envio de datos al servidor

> 10.10.25

- El cliente envía datos al servidor a través de la petición.
- La petición usa los datos de un formulario.
- Un formulario debe poner nombre a sus controles para enviar los datos.
- Los métodos de envío son GET y POST.
- GET usa la URL y los datos son visibles

```
  DOMINIO?dato=valor&otroDato=otroValor
```

- POST embebe los datos en el cuerpo (_body_) de la petición
```
// Esto es el head de la petición HTTP
POST /login HTTP/1.1
Host: example.com
Content-Type: application/x-www-form-urlencoded
Content-Length: 23

// Esto es el body de la petición HTTP
user=cesar&pass=1234
```

Directorios:

- Production

```
  IIS C:\inetpub\wwwroot
  APACHE .../htdocs
         .../root
```

- Development

```
  {virtual_path}\carpeta
```
