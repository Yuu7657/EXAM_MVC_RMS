<?php
if (isset($_SESSION["validar"])) {
    if ($_SESSION["validar"]) {
        header ("location:index.php?action=bienvenido");
    }
}
?>




<h1>Ingresar</h1>
<form method="post">
    <input type="text" name="usuarioIngresar" placeholder="Usuario" required>
    <br><br><br>
    <input type="password" name="passwordIngresar" placeholder="Registro" required>
    <br><br><br>
    <input type="email" name="emailIngresar" placeholder="Correo" required>
    <br><br><br>
    <input type="submit" value="Enviar" name="usuarioIngresado";>

</form>

<a href="index.php?action=registro">Registro</a>

<?php
 require_once "Controller/controller.php";
 $mvc=new MVCController();
 $mvc->ingresoUsuariosController();

?>
