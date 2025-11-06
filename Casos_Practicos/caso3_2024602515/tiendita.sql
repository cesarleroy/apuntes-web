CREATE DATABASE IF NOT EXISTS tiendita;

USE tiendita;

CREATE TABLE Producto(
    ID INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(100) NOT NULL,
    Descripcion VARCHAR(200),
    Precio DECIMAL(7, 2) NOT NULL
);

INSERT INTO Producto (Nombre, Descripcion, Precio) VALUES
  ('Coca-Cola 600ml', 'Refresco de cola de 600 ml', 18.00),
  ('Pepsi 600ml', 'Refresco de cola de 600 ml', 17.50),
  ('Fanta Naranja 600ml', 'Refresco sabor naranja de 600 ml', 17.00),
  ('Sprite 600ml', 'Refresco limón-lima de 600 ml', 17.00),
  ('Cheetos 90g', 'Botana de queso de 90 g', 22.00),
  ('Sabritones 90g', 'Botana picante para la peda de 90 g', 20.00),
  ('Doritos Nacho 125g', 'Totopos sabor nacho de 125 g', 28.00),
  ('Doritos Flamin Hot 150g', 'Totopos picantes de 150 g', 32.00),
  ('Sabritas 150g', 'Papas fritas clásicas de 150 g', 30.00),
  ('Pringles de Queso 165g', 'Papas en lata sabor a queso de 165 g', 45.00),
  ('7Up 600ml', 'Refresco limón-lima de 600 ml', 16.50),
  ('Monster Energy 500ml', 'Bebida energética de 500 ml', 35.00),
  ('Jarritos Piña 600ml', 'Refresco sabor piña de 600 ml', 20.00),
  ('Jugo Jumex Durazno 1L', 'Jugo de durazno de 1 litro', 22.00),
  ('Boing Mango 355ml', 'Jugo sabor mango de 355 ml', 16.00),
  ('Takis Fuego 70g', 'Totopos en forma de rollito picantes de 70 g', 28.00),
  ('Takis Guacamole 70g', 'Totopos en forma de rollito ácidos de 70 g', 30.00),
  ('Sabritas Adobadas 170g', 'Papas adobadas de 170 g', 28.00),
  ('Gansito', 'Pastelito relleno de mermelada de fresa cubierto de chocolate', 12.00),
  ('Emperador Chocolate 90g', 'Paquete de galletas sabor chocolate de 90 g', 18.00),
  ('Bonafont 1.5L', 'Agua purificada Bonafont de 1.5 litros', 14.00),
  ('Corona Extra 355ml', 'Cerveza Corona Extra de 355 ml', 28.00),
  ('Dos Equis 355ml', 'Cerveza Dos Equis Ámbar de 355 ml', 28.00),
  ('Panditas 120g', 'Caramelos gomosos panditas de 120 g', 20.00),
  ('Vero Mango (paleta)', 'Paleta sabor mango', 5.00),
  ('Bimbo Pan Blanco 680g', 'Pan de caja de 680 g', 40.00);