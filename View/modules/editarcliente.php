<h1>Editar Cliente</h1>

<form method="post">
<?php
    require_once "Controller/controller.php";
    $mvc = new MVCController();
    $mvc->editarDatosClientesController();
?>
</form>

<?php
    require_once "Controller/controller.php";
    $mvc = new MVCController();
    $mvc->actualizarDatosClientesController();

?>