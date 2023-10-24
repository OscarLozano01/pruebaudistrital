<?php
require '../config/database.php';

class CurrencyModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(servername, username, password, dbname);

        if ($this->conn->connect_error) {
            die("Conexión a la base de datos fallida: " . $this->conn->connect_error);
        }
    }

    public function getAllCurrencies() {
        $currencies = array();
        $sql = "SELECT code, name, exchange_rate FROM currencies";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $currencies[] = $row;
            }
        }

        return $currencies;
    }

    public function addCurrency($code, $name, $exchange_rate) {
        $code = $this->conn->real_escape_string($code);
        $name = $this->conn->real_escape_string($name);
        $exchange_rate = floatval($exchange_rate);

        $sql = "INSERT INTO currencies (code, name, exchange_rate) VALUES ('$code', '$name', $exchange_rate)";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function updateCurrency($id, $code, $name, $exchange_rate) {
        $id = intval($id);
        $code = $this->conn->real_escape_string($code);
        $name = $this->conn->real_escape_string($name);
        $exchange_rate = floatval($exchange_rate);

        $sql = "UPDATE currencies SET code='$code', name='$name', exchange_rate=$exchange_rate WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCurrency($id) {
        $id = intval($id);

        $sql = "DELETE FROM currencies WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
