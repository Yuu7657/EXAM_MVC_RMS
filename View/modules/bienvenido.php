<?php
//session_start();
if (!$_SESSION["validar"]) {
    header ("location:index.php?action=ingresar");
    header ("location:index.php?action=ingresarclientes");
}
$nom = $_SESSION["usuario"];
$nom = $_SESSION["clientes"];
?>
<h1>Bienvenido <?=$nom ?></h1>



