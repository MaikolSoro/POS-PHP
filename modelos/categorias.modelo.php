<?php

require_once "conexion.php";

class ModeloCategorias{

    /*=============================================
	MOSTRAR Categorías
    =============================================*/
    
    static public function mdlIngresarCategoria($tabla, $datos){



        $smt = Conexion::conectar()->prepare("INSERT INTO $tabla(categoria) VALUES (:categoria)");
        $smt->bindParam(":categoria", $datos, PDO:: PARAM_STR);

        if($smt->excute()){
           return  "ok";
        }else{
            return "error";
        }

        $smt->close();
        $smt = null;
    }



    
}