<h1>Registro</h1>

<form method="post">

    <input type="text" name="usuarioRegistro" placeholder="Usuario" required>
    <br><br><br>
    <input type="password" name="passwordRegistro" placeholder="Registro" required>
    <br><br><br>
    <input type="email" name="emailRegistro" placeholder="Correo" required>
    <br><br><br>
    <input type="submit" value="Enviar" name="usuarioRegistrado";>

</form>

<?php 
require_once "Controller/controller.php";
$mvc = new MVCController();
$mvc ->registroUsuariosController();
?>