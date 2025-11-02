<?php
if (isset($_SESSION["validar"])) {
    if ($_SESSION["validar"]) {
        header ("location:index.php?action=bienvenido");
    }
}
?>

<h1>Ingresar Clientes</h1>
<form method="post">
    <input type="text" name="nombreIngresar" placeholder="Nombre" required>
    <br><br><br>
    <input type="text" name="telefonoIngresar" placeholder="Teléfono" required>
    <br><br><br>
    <input type="email" name="correoIngresar" placeholder="Correo electrónico" required>
    <br><br><br>
    <input type="submit" value="Enviar" name="clienteIngresado">
</form>

<a href="index.php?action=registroclientes">Registro Clientes</a>

<?php
require_once "Controller/controller.php";
$mvc = new MVCController();
$mvc->ingresoClientesController();
?>
