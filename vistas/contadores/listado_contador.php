<?php

// CONTROLAR ÚLTIMO REGISTRO PARA CONSEGUIR FECHA AL CREAR NUEVO REGISTRO DE CONTADOR
$totalRegistros = count($contadores) - 1;
$nuevaFecha = ($contadores[$totalRegistros]->fecha);

/*
$nuevaFecha = substr($nuevaFecha, -5, 2);

switch ($nuevaFecha) {
    case 1:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 2:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 3:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 4:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 5:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 6:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 7:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 8:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 9:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 10:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 11:
        $nuevaFecha =  $nuevaFecha + 1;
        break;
    case 12:
        break;
}

$nuevaFecha = "21-".$nuevaFecha."-30"; */
// echo $nuevaFecha;


// necesitamos una función que coja el mes y según el número le sume 1 excepto el 12.




?>




<div class="card">
    <div class="card-header">
        <h3> VIVIENDA <?php echo $apartamento; ?> | <a name="" id="" class="btn btn-info" href="?controlador=contadores&accion=crear&apartamento=<?php echo $apartamento; ?>&fecha=<?php echo $nuevaFecha; ?>" role="button">AÑADIR LECTURA CONTADOR</a> </h3>
        <p></p>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <!--  <th>ID</th> -->
                    <th>FECHA</th>
                    <!--  <th>VIVIENDA</th> -->
                    <th>LECTURA ACTUAL</th>
                    <th>OBSERVACIONES</th>

                    <!-- ACCIONES -->
                    <th style="width:15px">ACCIÓN</th>



                </tr>
            </thead>
            <tbody>

                <?php foreach ($contadores as $contador) { ?>


                    <tr>
                        <!--   <td><?php // echo $contador->id; 
                                    ?></td> -->
                        <td><?php echo $contador->fecha; ?></td>
                        <!--  <td><?php echo $contador->apartamento; ?></td> -->
                        <td><?php echo $contador->lectura; ?></td>
                        <td><?php echo $contador->observaciones; ?></td>


                        <td>
                            <div class="btn-group" role="group" aria-label="">

                                <!-- BOTÓN EDITAR -->
                                <a href="?controlador=contadores&accion=editar&id=<?php echo $contador->id; ?>" class="btn btn-info btn-space" data-bs-toggle="tooltip" data-bs-placement="top" title="Pulse para editar"><i class="bi bi-pencil-square"></i></a>

                                <!--  <a href="?controlador=contadores&accion=borrar&id=<?php // echo $contador->id; 
                                                                                        ?>" class="btn btn-danger btn-space">BORRAR</a> -->

                            </div>
                        </td>


                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>


</div>