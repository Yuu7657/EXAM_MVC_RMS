<h1>Editar Usuario</h1>

<form method="post">
<?php
    require_once "Controller/controller.php";
    $mvc = new MVCController();
    $mvc->editarDatosUsuarioController();
?>
</form>

<?php
    require_once "Controller/controller.php";
    $mvc = new MVCController();
    $mvc->actualizarDatosUsuarioController();

?>