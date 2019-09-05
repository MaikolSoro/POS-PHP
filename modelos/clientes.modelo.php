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


        if ($stmt->excute()) {
            return "ok";
        }else{

            return "error";
        }
      
        $stmt->close();
        $stmt = null;
    }


}