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

- POST embebe los datos en el encabezado de la petición


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
