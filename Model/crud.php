<?php
require_once "conexion.php";

class Datos extends Conexion {
    public static function registrarUsuariosModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario, password, correo) VALUES (:usuario, :password, :email)");
        $st->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $st->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $st->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

        if ($st->execute()) {
            $_GET["id"] = Conexion::conectar()->lastInsertId();
            return "OK";
        } else {
            return "Error";
        }
    }

    public static function ingresoUsuariosModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("SELECT usuario, password, correo FROM $tabla WHERE correo = :email AND password = :password");
        $st->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        $st->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $st->execute();
        return $st->fetch();
    }

    public static function consultarUsuariosModel($tabla) {
        $st = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $st->execute();
        return $st->fetchAll();
    }

    public static function borrarUsuariosModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cve_usu = :id");
        $st->bindParam(":id", $datosModel, PDO::PARAM_INT);
        if ($st->execute()) {
            return "OK";
        } else {
            return "ERROR";
        }
    }

    public static function editarDatosUsuarioModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE cve_usu = :id");
        $st->bindParam(":id", $datosModel, PDO::PARAM_INT);
        $st->execute();
        return $st->fetch();
    }

    public static function actualizarDatosUsuarioModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("UPDATE $tabla SET 
            usuario = :usuario,
            password = :password,
            correo = :email
            WHERE cve_usu = :id");
        $st->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $st->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $st->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        $st->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        if ($st->execute()) {
            return "OK";
        } else {
            return "ERROR";
        }
    }




public static function registrarClientesModel($datosModel, $tabla) {
    $str = Conexion::conectar();
    $st = $str->prepare("INSERT INTO $tabla (nom_cli, dir_cli, tel_cli, correo_cli) VALUES (:nombre, :direccion, :telefono, :correo)");
    $st->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $st->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
    $st->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
    $st->bindParam(":correo", $datosModel["correo"], PDO::PARAM_STR);

    if ($st->execute()) {
        $_GET["id"] = $str->lastInsertId();
        return "ok";
    } else {
        return "Error";
    }
}


    
    public static function consultarClientesModel($tabla) {
        $st = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $st->execute();
        return $st->fetchAll();
    }

    public static function borrarClientesModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cve_cli = :id");
        $st->bindParam(":id", $datosModel, PDO::PARAM_INT);
        if ($st->execute()) {
            return "OK";
        } else {
            return "ERROR";
        }
    }

    public static function editarDatosClientesModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE cve_cli = :id");
        $st->bindParam(":id", $datosModel, PDO::PARAM_INT);
        $st->execute();
        return $st->fetch();
    }

    public static function actualizarDatosClientesModel($datosModel, $tabla) {
        $st = Conexion::conectar()->prepare("UPDATE $tabla SET 
        nom_cli = :nombre,
        dir_cli = :direccion,
        tel_cli = :telefono,
        correo_cli = :correo
        WHERE cve_cli = :id");
        $st->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
        $st->bindParam(":direccion", $datosModel["direccion"], PDO::PARAM_STR);
        $st->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
        $st->bindParam(":correo", $datosModel["correo"], PDO::PARAM_STR);
        $st->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        if ($st->execute()) {
            return "OK";
        } else {
            return "ERROR";
        }
    }
}



