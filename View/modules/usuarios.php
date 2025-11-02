<h1>Usuario</h1>
<table>
    <thead>
        <tr>
            <td>Usuario</td>
            <td>Pasword</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>
        <?php 
            require_once "controller/controller.php";
            $mvc = new MVCController();
            $mvc -> vistaUsuariosController();

        ?>
    </tbody>
</table>
<?php 
        require_once "Controller/controller.php";
        $mvc = new MVCController();
        $mvc -> borrarUsuariosController();
?>
