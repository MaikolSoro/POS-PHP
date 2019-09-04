<?php

class ControladorCategorias{

   /*=============================================
	CREAR CATEGORIAS
	=============================================*/

    static public function ctrCrearCategoria(){


        if(isset($_POST["nuevaCategoria"])){


            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){
              
                $tabla = "categorias";
                $datos = $_POST["nuevaCategoria"];
                $respuesta = ModeloCategorias:: mdlIngresarCategoria($tabla,$datos);

                if($respuestas == "ok"){

                    
					echo'<script>

					swal({
						  type: "success",
						  title: "La categoría ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';
                }



            }else{

                echo '<script>

                swal({

                    type: "error",
                    title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                }).then(function(result){

                    if(result.value){
                    
                        window.location = "usuarios";

                    }

                });
            

            </script>';
            }
        }
    }

}

