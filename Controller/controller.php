<?php
include "model/model.php";
include "model/crud.php";

class MVCController {
    public function getTemplate() {
        include "View/template.php";
    }

    public function enlacesPaginasController() {
        $enlacesController = (isset($_GET['action'])) ? $_GET['action'] : "index";
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }

    public function registroUsuariosController() {
        if (isset($_POST["usuarioRegistrado"])) {
            $datosController = array(
                "usuario" => $_POST["usuarioRegistro"],
                "password" => $_POST["passwordRegistro"],
                "email" => $_POST["emailRegistro"]
            );
            $respuesta = Datos::registrarUsuariosModel($datosController, "usuarios");

            if ($respuesta == "OK") {
                header("location:index.php?action=ingresar&id=" . $_GET["id"]);
            } else {
                echo "Error al registrar";
            }
        }
    }

    public function ingresoUsuariosController() {
        if (isset($_POST["usuarioIngresado"])) {
            $datosController = array(
                "usuario" => $_POST["usuarioIngresar"],
                "password" => $_POST["passwordIngresar"],
                "email" => $_POST["emailIngresar"]
            );
            $respuesta = Datos::ingresoUsuariosModel($datosController, "usuarios");

            if (isset($respuesta["usuario"]) && $respuesta["usuario"] == $_POST["usuarioIngresar"] && $respuesta["password"] == $_POST["passwordIngresar"]) {
                session_start();
                $_SESSION["validar"] = true;
                $_SESSION["usuario"] = $respuesta["usuario"];
                header("location:index.php?action=bienvenido");
            } else {
                echo "Usuario o contraseña inválidos";
            }
        } else {
            echo "Error usuario";
        }
    }

    public function vistaUsuariosController() {
        if (isset($_GET["action"])) {
            $respuesta = Datos::consultarUsuariosModel("usuarios");

            if (!empty($respuesta)) {
               
                foreach ($respuesta as $item) {
                    echo "<tr>
                            <td>{$item['usuario']}</td>
                            <td>{$item['password']}</td>
                            <td>{$item['correo']}</td>
                            <td><a href='index.php?action=editar&id={$item['cve_usu']}'><button>Editar</button></a></td>
                            <td><a href='index.php?action=usuarios&idBorrar={$item['cve_usu']}'><button>Borrar</button></a></td>
                        </tr>";
                }

                echo '</table>';
            } else {
                echo "<p>No hay registros</p>";
            }
        } else {
            echo "Algo anda mal";
        }
    }

    public function borrarUsuariosController() {
        if (isset($_GET["idBorrar"])) {
            $datosController = $_GET["idBorrar"];
            $respuesta = Datos::borrarUsuariosModel($datosController, "usuarios");
            if ($respuesta == "OK") {
                header("location:index.php?action=cambio");
            } else {
                echo "<p>¡No se pudo eliminar al usuario!</p>";
            }
        }
    }

    public function editarDatosUsuarioController() {
        if (isset($_GET["id"]) && !empty($_GET["id"])) {
            $datosController = $_GET["id"];
            $respuesta = Datos::editarDatosUsuarioModel($datosController, "usuarios");
            echo ' <input type="text" name="usuarioEdicion" value="' . $respuesta["usuario"] . '">
                  <br><br><br>
                  <input type="text" name="passwordEdicion" value="' . $respuesta["password"] . '">
                  <br><br><br>
                  <input type="email" name="emailEdicion" value="' . $respuesta["correo"] . '">
                  <br><br><br>
                  <input type="submit" value="Editar" name="usuarioEditar">';
        }
    }

    public function actualizarDatosUsuarioController() {
        if (isset($_POST["usuarioEditar"])) {
            $datosController = array(
                "usuario" => $_POST["usuarioEdicion"],
                "password" => $_POST["passwordEdicion"],
                "email" => $_POST["emailEdicion"],
                "id" => $_GET["id"]
            );
            $respuesta = Datos::actualizarDatosUsuarioModel($datosController, "usuarios");
            if ($respuesta == "OK") {
                header("location:index.php?action=cambio");
            } else {
                echo "<p>Error al editar</p>";
            }
        }
    }


    public function registroClientesController() {
        if (isset($_POST["clienteRegistrado"])) {
            $datosController = array(
                "nombre" => $_POST["nombreRegistro"],
                "direccion" => $_POST["direccionRegistro"],
                "telefono" => $_POST["telefonoRegistro"],
                "correo" => $_POST["correoRegistro"]
            );
            $respuesta = Datos::registrarClientesModel($datosController, "clientes");

            if ($respuesta == "OK") {
                header("location:index.php?action=ingresarclientes&id=" . $_GET["id"]);
            } else {
                echo "cliente registrado";
            }
        }
    }
    public function ingresoClientesController() {
        if (isset($_POST["clientes"])) {
            $datosController = array(
                "nombre" => $_POST["nombreIngresar"],
                "direccion" => $_POST["direccionIngresar"],
                "telefono" => $_POST["telefonoIngresar"],
                "correo" => $_POST["correoIngresar"]
            );
            $respuesta = Datos::ingresoClientesModel($datosController, "clientes");
    
            if ($respuesta && $respuesta["nom_cli"] == $_POST["nombreIngresar"] && $respuesta["dir_cli"] == $_POST["direccionIngresar"] && $respuesta["tel_cli"] == $_POST["telefonoIngresar"] && $respuesta["correo_cli"] == $_POST["correoIngresar"]) {
                session_start();
                $_SESSION["validar"] = true;
                $_SESSION["nombre"] = $respuesta["nom_cli"];
                $mensaje = "Ingreso exitoso. Bienvenido, " . $respuesta["nom_cli"] . "!";
                header("location:index.php?action=bienvenido");
            } else {
                $mensaje = "Error: Nombre, dirección, teléfono o correo inválidos.";
                echo $mensaje;
            }
        }
    }
    
    
    
    public function vistaClientesController() {
        if (isset($_GET["action"])) {
            $respuesta = Datos::consultarClientesModel("clientes");
            if (!empty($respuesta)) {
                

                foreach ($respuesta as $row => $item) {
                    echo "<tr>
                        <td> " . $item["nom_cli"] . " </td>
                        <td> " . $item["dir_cli"] . " </td>
                        <td> " . $item["tel_cli"] . " </td>
                        <td> " . $item["correo_cli"] . " </td>
                        <td> <a href='index.php?action=editarcliente&id=" . $item["cve_cli"] . "'><button> Editar </button></a></td>
                        <td><a href='index.php?action=clientes&idBorrar=" . $item["cve_cli"] . "'><button> Borrar </button></a> </td>
                    </tr>";
                }

                echo '</table>';
            } else {
                echo "<p>No hay registros</p>";
            }
        } else {
            echo "Algo anda mal";
        }
    }

    public function borrarClientesController() {
        if (isset($_GET["idBorrar"])) {
            $datosController = $_GET["idBorrar"];
            $respuesta = Datos::borrarClientesModel($datosController, "clientes");
            if ($respuesta == "OK") {
                header("location:index.php?action=cambio");
            } else {
                echo "<p>No se pudo eliminar al cliente</p>";
            }
        }
    }

    public function editarDatosClientesController() {
        if (isset($_GET["id"]) && !empty($_GET["id"])) {
            $datosController = $_GET["id"];
            $respuesta = Datos::editarDatosClientesModel($datosController, "clientes");
            echo ' <input type="text" name="nombreEdicion" value="' . $respuesta["nom_cli"] . '">
                <br><br><br>
                <input type="text" name="direccionEdicion" value="' . $respuesta["dir_cli"] . '">
                <br><br><br>
                <input type="text" name="telefonoEdicion" value="' . $respuesta["tel_cli"] . '">
                <br><br><br>
                <input type="email" name="correoEdicion" value="' . $respuesta["correo_cli"] . '">
                <br><br><br>
                <input type="submit" value="editarcliente" name="clienteEditar">';
        }
    }

    public function actualizarDatosClientesController() {
        if (isset($_POST["clienteEditar"])) {
            $datosController = array(
                "nombre" => $_POST["nombreEdicion"],
                "direccion" => $_POST["direccionEdicion"],
                "telefono" => $_POST["telefonoEdicion"],
                "correo" => $_POST["correoEdicion"],
                "id" => $_GET["id"]
            );
            $respuesta = Datos::actualizarDatosClientesModel($datosController, "clientes");
            if ($respuesta == "OK") {
                header("location:index.php?action=cambio");
            } else {
                echo "<p>Error al editar</p>";
            }
        }
    }
}

?>

