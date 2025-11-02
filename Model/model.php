<?php 
class EnlacesPaginas{
    public static function enlacesPaginasModel($enlacesModel){
        if($enlacesModel == "ingresar" or
        $enlacesModel == "ingresarclientes" or
        $enlacesModel == "servicios" or
         $enlacesModel == "contacto" or
          $enlacesModel == "registro" or
          $enlacesModel == "registroclientes" or
           $enlacesModel == "bienvenido" or
            $enlacesModel == "salir" or
             $enlacesModel == "usuarios" or
             $enlacesModel == "editar" or
             $enlacesModel == "editarcliente" or
              $enlacesModel == "inicio" or
              $enlacesModel == "clientes"){

            $module="View/modules/".$enlacesModel.".php";
        }elseif($enlacesModel=="index") {
            $module="View/modules/Inicio.php";
        } elseif ($enlacesModel== "cambio") {
            $module= "View/modules/usuarios.php";
            $module="View/modules/clientes.php";
        }else {  
            $module="View/modules/error.php"; }
            
        return $module;
    }
}
?>