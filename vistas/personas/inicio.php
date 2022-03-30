



<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-info" href="?controlador=personas&accion=crear" role="button">AÑADIR PROPIETARIO/INQUILINO</a>

        <p></p>
        <input class="input-group-text" type="text" name="search" value="" id="search" placeholder="ESCRIBE PARA BUSCAR..." autofocus />

        <p></p>


        <table id="search" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <!--    <th>ID</th> -->
                    <th>VIVIENDA</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th>CORREO</th>
                    <th>CARGO</th>
                    <th>ACCIONES</th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($personas as $persona) { ?>

                    <tr>
                        <!--  <td><?php // echo $persona->id; 
                                    ?></td> -->
                        <td><?php echo $persona->apartamento; ?></td>
                        <td><?php echo $persona->nombre; ?></td>
                        <td><?php echo $persona->telefono; ?></td>
                        <td><?php echo $persona->correo; ?></td>
                        <td><?php echo $persona->cargo; ?></td>

                        <td>


                            <div class="btn-group" role="group" aria-label="">

                                <!-- BOTÓN EDITAR -->
                                <a href="?controlador=personas&accion=editar&id=<?php echo $persona->id; ?>" class="btn btn-info btn-space" data-bs-toggle="tooltip" data-bs-placement="top" title="Pulse para editar"><i class="bi bi-pencil-square"></i></a>


                                <!-- BOTÓN BORRAR  -->
                                <?php

                                if($persona->apartamento!='A0'){ ?>

                                    <!-- <a href="?controlador=personas&accion=borrar&id=<?php // echo $persona->id; ?>" class="btn btn-danger btn-space"><i class="bi bi-trash"></i></a>  -->


                                    <a href="?controlador=personas&accion=borrar&id=<?php echo $persona->id; ?>" class="btn btn-danger btn-space borrar" data-bs-toggle="tooltip" data-bs-placement="top" title="Pulse para eliminar"><i class="bi bi-trash"></i></a> 
      
                               <?php  }else{  ?>
                              <a href="#" class="btn btn-secondary btn-space"><i class="bi bi-dash-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="No puede ser eliminado"></i></a>

                              <?php } ?>


                               
                                 
                            


                            </div>
                        </td>


                    </tr>

                 

                <?php } ?>

            </tbody>
        </table>

    </div>


</div>


