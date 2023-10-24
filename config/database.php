<?php
define('servername', 'vps-360101');
define('username', 'gesthco_currency_converter');
define('password', 'gesthco_currency_converter');
define('dbname', 'gesthco_currency_converter'); 

$conn = new mysqli(servername, username, password, dbname);

if ($conn->connect_error) {
    die("Conexión a la base de datos fallida: " . $conn->connect_error);
}
