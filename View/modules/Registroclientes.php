<h1>Registro Clientes</h1>

<form method="post">

    <input type="text" name="nombreRegistro" placeholder="Nombre" required>
    <br><br><br>
    <input type="double" name="direccionRegistro" placeholder="Dirección" required>
    <br><br><br>
    <input type="text" name="telefonoRegistro" placeholder="Teléfono" required>
    <br><br><br>
    <input type="email" name="correoRegistro" placeholder="Correo electrónico" required>
    <br><br><br>
    <input type="submit" value="Enviar" name="clienteRegistrado">
</form>

<?php 
require_once "Controller/controller.php";
$mvc = new MVCController();
$mvc->registroClientesController();
?>
