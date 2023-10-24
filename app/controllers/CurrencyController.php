<?php
require '../app/models/CurrencyModel.php';

class CurrencyController {
    public function index() {
        $model = new CurrencyModel();
        $currencies = $model->getAllCurrencies();
        require '../app/views/index.php';
    }

    public function currencies() {
        $model = new CurrencyModel();
        $currencies = $model->getAllCurrencies();
        require '../app/views/currencies.php';
    }

    public function addCurrency() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $code = $_POST['code'];
            $name = $_POST['name'];
            $exchange_rate = $_POST['exchange_rate'];
    
            $model = new CurrencyModel();
            $result = $model->addCurrency($code, $name, $exchange_rate);
    
            if ($result) {
                header("Location: currencies.php"); // Redirige a la vista de administración de divisas
                exit;
            } else {
                // Hubo un error al agregar la divisa, muestra un mensaje de error.
                echo "Error al agregar la divisa.";
            }
        }
    }
    

    public function updateCurrency() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $code = $_POST['code'];
            $name = $_POST['name'];
            $exchange_rate = $_POST['exchange_rate'];
    
            $model = new CurrencyModel();
            $result = $model->updateCurrency($id, $code, $name, $exchange_rate);
    
            if ($result) {
                header("Location: currencies.php"); // Redirige a la vista de administración de divisas
                exit;
            } else {
                // Hubo un error al actualizar la divisa, muestra un mensaje de error.
                echo "Error al actualizar la divisa.";
            }
        }
    }
    

    public function deleteCurrency() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
    
            $model = new CurrencyModel();
            $result = $model->deleteCurrency($id);
    
            if ($result) {
                header("Location: currencies.php"); // Redirige a la vista de administración de divisas
                exit;
            } else {
                // Hubo un error al eliminar la divisa, muestra un mensaje de error.
                echo "Error al eliminar la divisa.";
            }
        }
    }
    
}
