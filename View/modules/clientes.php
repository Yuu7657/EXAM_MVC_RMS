<h1>Clientes</h1>
<table>
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Dirección</td>
            <td>Teléfono</td>
            <td>Correo</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>
        <?php 
            require_once "controller/controller.php";
            $mvc = new MVCController();
            $mvc->vistaClientesController();
        ?>
    </tbody>
</table>
<?php 
    require_once "Controller/controller.php";
    $mvc = new MVCController();
    $mvc->borrarClientesController();
?>
