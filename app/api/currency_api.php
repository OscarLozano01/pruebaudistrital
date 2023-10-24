<?php
require '../models/CurrencyModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fromCurrencyCode = $_POST['from_currency_code'];
    $toCurrencyCodes = $_POST['to_currency_codes'];
    $amount = floatval($_POST['amount']);

    if (empty($fromCurrencyCode) || empty($toCurrencyCodes) || $amount <= 0) {
        // Manejo de errores si faltan datos o los datos son inválidos
        http_response_code(400); // Respuesta de error 400 Bad Request
        echo json_encode(array("message" => "Datos de conversión inválidos."));
    } else {
        $model = new CurrencyModel();
        $conversionResults = array();

        foreach ($toCurrencyCodes as $toCurrencyCode) {
            $conversionResult = $model->convertCurrency($fromCurrencyCode, $toCurrencyCode, $amount);
            $conversionResults[$toCurrencyCode] = $conversionResult;
        }

        // Devuelve los resultados de la conversión en formato JSON
        echo json_encode($conversionResults);
    }
} else {
    // Manejo de solicitudes no admitidas
    http_response_code(405); // Respuesta de error 405
    echo json_encode(array("message" => "Método no permitido."));
}
