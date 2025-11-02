<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Diseño/index.css">
    <title>Template</title>
</head>
<body>
    <header>
        <h1>Logotipo</h1>
    </header>
    <?php 
    include "modules/nav.php"
    ?>
    <section>
        <?php 
        require_once "Controller/controller.php";
        $mvc = new MVCController();
        $mvc -> enlacesPaginasController();
        ?>
    </section>
</body>
</html>