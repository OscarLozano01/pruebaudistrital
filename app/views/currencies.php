<?php require '../templates/layout.php'; ?>
<h1>Administrar Divisas</h1>
<a href="index.php">Volver</a>
<!-- Formulario para agregar una nueva divisa -->
<form action="currency_controller.php" method="post">
    <h2>Agregar Divisa</h2>
    <label for="code">Código:</label>
    <input type="text" name="code" id="code">
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name">
    <label for="exchange_rate">Tasa de Cambio:</label>
    <input type="text" name="exchange_rate" id="exchange_rate">
    <input type="submit" value="Agregar">
</form>

<!-- Formulario para actualizar una divisa -->
<form action="currency_controller.php" method="post">
    <h2>Actualizar Divisa</h2>
    <label for="update_id">ID de Divisa:</label>
    <input type="text" name="update_id" id="update_id">
    <label for="update_code">Nuevo Código:</label>
    <input type="text" name="update_code" id="update_code">
    <label for="update_name">Nuevo Nombre:</label>
    <input type="text" name="update_name" id="update_name">
    <label for="update_exchange_rate">Nueva Tasa de Cambio:</label>
    <input type="text" name="update_exchange_rate" id="update_exchange_rate">
    <input type="submit" value="Actualizar">
</form>

<!-- Formulario para eliminar una divisa -->
<form action="currency_controller.php" method="post">
    <h2>Eliminar Divisa</h2>
    <label for="delete_id">ID de Divisa:</label>
    <input type="text" name="delete_id" id="delete_id">
    <input type="submit" value="Eliminar">
</form>
