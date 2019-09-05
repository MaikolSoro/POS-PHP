<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>


  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
      
          
      <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
         <thead>
          
          <tr>
            
            <th style="width:10px">#</th>
            <th>Producto</th>
            <th>Acciones</th>
 
          </tr> 
 
         </thead>
 
         <tbody>
 
         <?php
 
           $item = null;
           $valor = null;
 
           $productos= ControladorProductos::ctrMostrarProductos($item, $valor);
 
           foreach ($productos as $key => $value) {
            
             echo ' <tr>
 
                     <td>'.($key+1).'</td>
 
                     <td class="text-uppercase">'.$value["producto"].'</td>
 
                     <td>
 
                       <div class="btn-group">
                           
                         <button class="btn btn-warning btnEditarProducto" idProducto="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarProducto"><i class="fa fa-pencil"></i></button>
 
                         <button class="btn btn-danger btnEliminarProducto" idProducto="'.$value["id"].'"><i class="fa fa-times"></i></button>
 
                       </div>  
 
                     </td>
 
                   </tr>';
           }
 
         ?>
 
         </tbody>
 
        </table>
 
       </div>
 
     </div>
 
   </section>
 
 </div>
 
 <!--=====================================
 MODAL AGREGAR  Productos
 ======================================-->
 
 <div id="modalAgregarCategoria" class="modal fade" role="dialog">
   
   <div class="modal-dialog">
 
     <div class="modal-content">
 
       <form role="form" method="post">
 
         <!--=====================================
         CABEZA DEL MODAL
         ======================================-->
 
         <div class="modal-header" style="background:#3c8dbc; color:white">
 
           <button type="button" class="close" data-dismiss="modal">&times;</button>
 
           <h4 class="modal-title">Agregar Producto</h4>
 
         </div>
 
         <!--=====================================
         CUERPO DEL MODAL
         ======================================-->
 
         <div class="modal-body">
 
           <div class="box-body">
 
             <!-- ENTRADA PARA EL NOMBRE -->
             
             <div class="form-group">
               
               <div class="input-group">
               
                 <span class="input-group-addon"><i class="fa fa-th"></i></span> 
 
                 <input type="text" class="form-control input-lg" name="nuevoProducto" placeholder="Ingresar Producto" id="nuevoProducto" required>
 
               </div>
 
             </div>
   
           </div>
 
         </div>
      </div>







      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->