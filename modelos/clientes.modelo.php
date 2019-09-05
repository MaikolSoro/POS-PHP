<?php
require_once "conexion.php";

class ModeloClientes{

   /*=============================================
	CREAR CLIENTE
    =============================================*/
    
    static public function mdlIngresarCliente($tabla,$datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, cedula, email, telefono, direccion, fecha_nacimiento) VALUES (:nombre, :cedula, :email, :telefono, :direccion, :fecha_nacimiento)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);


        if ($stmt->execute()) {
            return "ok";
        }else{

            return "error";
        }
      
        $stmt->close();
        $stmt = null;
    }

    /*=============================================
	Mostrar CLIENTE
    =============================================*/


    static public function mdlMostrarClientes($tabla,$item,$valor){

        if ($item!= null) {
            $stmt = Conexion::conectar()->prepare("SELECT* FROM $tabla WHERE $item=:$item");
            $smt->bindParam(":".$item,$valor,PDO::PARAM_STR);
            $smt-> excute();
            return $smt-> fetch();
        }else{


            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
}