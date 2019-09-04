<?php

require_once "conexion.php";

class ModeloCategorias{

    /*=============================================
	CREAR Categorías
    =============================================*/
    
    static public function mdlIngresarCategoria($tabla, $datos){



        $smt = Conexion::conectar()->prepare("INSERT INTO $tabla(categoria) VALUES (:categoria)");
        $smt->bindParam(":categoria", $datos, PDO::PARAM_STR);

        if($smt-> excute()){
           return  "ok";
        }else{
            return "error";
        }

        $smt->close();
        $smt = null;
    }

    /*=============================================
	MOSTRAR CATEGORIAS
    =============================================*/
    

    static public function mdlMostrarCategorias($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}





}