# prueba udistrital
Prueba técnica de ingreso como desarrollador perfil tecnólogo
Pasos para instalar en local
1 XAMPP
1.1 crear base de datos
CREATE DATABASE currency_converter;

USE currency_converter;

CREATE TABLE currencies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(3) NOT NULL,
    name VARCHAR(255) NOT NULL,
    exchange_rate DECIMAL(10, 4) NOT NULL
);

INSERT INTO currencies (code, name, exchange_rate) VALUES
    ('USD', 'Dólar estadounidense', 1.0000),
    ('COP', 'Peso colombiano', 3550.0000),
    ('EUR', 'Euro', 0.8500),
    ('BRL', 'Real brasileño', 5.2800);

![Captura3](https://github.com/OscarLozano01/pruebaudistrital/assets/50722140/50e6196e-2ef9-491c-a0b3-a3bb726de363)

cambiar los siguientes datos en el archivo config-database.php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "currency_converter";
![Capturabd](https://github.com/OscarLozano01/pruebaudistrital/assets/50722140/329088de-8b35-4d70-bb62-8a4b692009c9)

Para administrar las divisas
ir a la siguiente ruta: http://localhost/prueba_conversion/public/currencies.php
![Captura1](https://github.com/OscarLozano01/pruebaudistrital/assets/50722140/962ac3cb-5156-47c2-94cc-7505eb446c00)

Para el conversor de divisas
ir a la siguiente ruta: http://localhost/prueba_conversion/public/index.php
![Captura2](https://github.com/OscarLozano01/pruebaudistrital/assets/50722140/d57d695e-587a-4ed0-89af-c7c171aef633)
