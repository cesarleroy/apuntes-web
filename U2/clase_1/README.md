# HopWeb

> 09.10.25

El lenguaje PHP

1. E/S datos

```php
    // Salida
    echo "texto";
    printf("formato", $variable);
```

2. Expresiones y variables

```php
    // Variables
    $variable = 0     # int
                0.0   # double
                "0"   # char / str
                false # boolean
```
3. Control de flujo

```php
    if else, switch, for, while, do while, foreach

    foreach(arreglo as valor) {
        # procesos
    }

    # Solo toma los valores, no las claves
    foreach(arreglo_asociativo as valor) {
        # procesos
    }

    # Toma los pares (clave, valor)
    foreach(arreglo_asociativo as clave => valor) {
        # procesos
    }

```

4. Agrupación de datos

```php
    $arreglo = [1, 2, 3]

    // Arreglo asociativo
    $arr = ["alfa" => "algo", "beta" => "otra cosa"]

    echo $arr["beta"] // "otra cosa" salida
```

5. Funciones

```php
    function nombre(args) {
        # contenido
        return tipo // opcional
    }
```
