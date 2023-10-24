<?php require '../templates/layout.php'; ?>
<h1>Conversor de Divisas</h1>
<a href="currencies.php">Administrar Divisas</a>
<form action="currency_api.php" method="post">
    <label for="from_currency_code">Moneda de partida:</label>
    <select name="from_currency_code" id="from_currency_code">        
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>        
    </select>
    <label for="to_currency_codes">Monedas de llegada:</label>
    <select name="to_currency_codes[]" id="to_currency_codes" multiple>        
        <option value="COP">COP</option>
        <option value="BRL">BRL</option>        
    </select>
    <label for="amount">Cantidad:</label>
    <input type="text" name="amount" id="amount">
    <input type="submit" value="Convertir">
</form>
