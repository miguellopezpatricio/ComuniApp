<?php



$totalCargos = 0;
$totalIngresos = 0;

// FUNCIÓN PARA CAMBIO A DECIMAL

function cambioDecimal($num)
{

    return number_format($num, 2, ',', '.');
}



?>


<div class="card">
    <div class="card-header">
        <h3> VIVIENDA <?php echo $apartamento; ?> | <a name="" id="" class="btn btn-info" href="?controlador=registros&accion=crear&apartamento=<?php echo $apartamento; ?>" role="button">AÑADIR REGISTRO VIVIENDA</a></h3>

        <p></p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <!--  <th>ID</th> -->
                    <th class="col-1">FECHA</th>
                    <!--   <th>V</th> -->
                  <!--  <th>LTA ANT</th>-->
                    <th>LTA ACT</th>
                    <th>CONSUMO</th>

                       <th class="col-1">COSTE</th>
                    <th>AGUA</th>
                    
                    
                    <th>COMUNIDAD</th>
                    <th>CARGO</th>
                    <th>INGRESO</th>
                    <th>SALDO</th>
                    <th>INFO VIVIENDA</th>
                    <th>INFO CONTADOR</th>
                    <th>ADJUNTO</th>
                    <th>ACCIONES</th>

                </tr>
            </thead>
            <tbody>

                <?php

                // primer objeto registro del array solicitado según vivienda
                // está claro que necesitamos un acumulador para ir aumentando el campo LECTURA_ANTERIOR de la tabla a mostrar

                //   echo('REGISTRO valor lectura: ' . $registros[0]->fecha);
                ?>


                <?php

                $mostrarLecturaAnterior = 0;
                $cacheLecturaActual = 0;
                $cacheLecturaAnterior = 0;
                $saldoInicial = 0;
                
                $mostrarSaldo = 0;
                $mostrarIngreso = 0;
                $totalCargos = 0;
                $totalIngresos = 0;
                $ingreso = 0;


                foreach ($registros as $registro) { 
                    
           

                    
                    ?>

                    <form action="" method="">
                        <tr>
                            <!-- <td><?php // echo $registro->id; 
                                        ?></td> -->
                            <td class="col-1"><?php

                            $fecha = $registro->fecha;
                            $fecha = new DateTime($fecha);
                            
                            echo $fecha->format("d-m-Y"); ?></td>
                            <!--  <td><?php
                                        $vivienda = $registro->apartamento;

                                        echo $vivienda; ?></td> -->
                            <td hidden align="right"><?php



                                                        /*

                                            QUIZÁS VERIFICAR LA FECHA DEL REGISTRO
                                            SI ES 01/01 ES EL INICIO DE AÑO
                                            SI NO... TOCA ACUMULAR EL ANTERIOR MES

                                            */

                                                        // 1 si fecha == 01/01 almacenar lectura anterior en lecturaInicioAno
                                                        // 2 si fecha != 01/01 almacenar diferencia entre lectura anterior y actual en diferenciaLecturas
                                                        // 3 si fecha == 1/01 lectura anterior = lectura anterior
                                                        // 4 si fecha != 1/01 lectura anterior = lecturaInicioAno + diferenciaLecturas 
                                                        // 5 IMPRIMIR lecturaAnterior, lecturaActual, calcular CARGO
                                                        // 6 lecturaInicioAno == 0 diferencaLecturas == 0

                                                        if ($registro->fecha == "2022-01-01") {

                                                            $mostrarLecturaAnterior = $registro->lecturaAnterior;
                                                            $mostrarLecturaActual = $registro->lecturaAnterior;
                                                            $cacheLecturaAnterior = $registro->lecturaAnterior;
                                                            $cacheLecturaActual = 0;

                                                           

                                                        } elseif ($cacheLecturaActual == 0) {

                                                            $mostrarLecturaAnterior = $cacheLecturaAnterior;
                                                            $mostrarLecturaActual = $registro->lecturaActual;
                                                            $cacheLecturaActual = $registro->lecturaActual;
                                                        } else {
                                                            $mostrarLecturaAnterior = $cacheLecturaActual;
                                                            $mostrarLecturaActual = $registro->lecturaActual;
                                                            $cacheLecturaAnterior = $cacheLecturaActual;

                                                            $cacheLecturaActual = $registro->lecturaActual;
                                                        }

                                                        $diferenciaLectura = ($mostrarLecturaActual - $mostrarLecturaAnterior);


                                                   //        if ($registro->lecturaAnterior != 0) {
                                                   //   echo $mostrarLecturaAnterior; // esta sería la lectura del mes anterior

                                        //                 } else echo 0;


                                                        ?></td>
                            <td align="right"><?php




                                                echo $mostrarLecturaActual; // SE MOSTRARÍA EL RESULTADO DE LA BÚSQUEDA EN LA TABLA CONTADORES 
                                                ?></td>
                             <td align="right"><?php echo $diferenciaLectura; ?></td>
        
                            <td class="col-1" align="right"><?php echo cambioDecimal($registro->agua) . ' m³/€'; ?></td>
                            
                               <td class="col-1" align="right"><?php 
                               $precioAgua = $registro->agua;
                            echo cambioDecimal($diferenciaLectura * $precioAgua) . ' €'; ?></td>
                            
                            
                            <td align="right"><?php echo cambioDecimal($registro->comunidad)  . ' €'; ?></td>

                            <td align="right"><?php


                                                //  $consumoAgua = $registro->consumo; // AQUÍ TIENE QUE MOSTRAR es: resultado=lectura anterior menos consumo actual => (resultado*agua)+comunidad 
                                                $precioAgua = $registro->agua;
                                                $cargoComunidad = $registro->comunidad;

                                                if ($mostrarLecturaActual == 0) {
                                                    echo "<font color=red>SIN DATOS</font color=red>";
                                                    $cargoMesApartamento = $cargoComunidad;

                                                } else {



                                                    $cargoMesApartamento = ($diferenciaLectura * $precioAgua) + $cargoComunidad;
                                                    $muestraCargo =  cambioDecimal($cargoMesApartamento) . ' €'; 

                                                    echo $muestraCargo;

                                                    $ingreso = $registro->ingreso;

                                                }


                                                    $totalCargos = $totalCargos + $cargoMesApartamento;
                                                    $totalIngresos = $totalIngresos + $ingreso;


                                                ?></td>

                            <!--  <td><?php // echo $registro->cargo;  
                                        ?></td> -->
                            <td align="right"><?php

                                                $mostrarIngreso = cambioDecimal($ingreso) . ' €';

                                                if ($mostrarIngreso == "0,00 €"){
                                                    $mostrarIngreso = "";
                                                } 

                                                echo $mostrarIngreso; ?></td>

                            <td align="right"><?php

                         

                            if($registro->fecha == '2022-01-01'){
                                $saldoInicial = $registro->saldo;
                                $mostrarSaldo = $ingreso;
                            }else{
                                $mostrarSaldo = ($mostrarSaldo + $ingreso) - $cargoMesApartamento;
                            }
                            
                            
                            if ($mostrarSaldo < 0) {
                                echo "<font color=red>".cambioDecimal($mostrarSaldo)."</font color=red>";
                            } else {
                            echo cambioDecimal($mostrarSaldo);} ?></td>

                            <td><?php echo $registro->infoVivienda; ?></td>
                            <td><?php echo $registro->infoContador; ?></td>   
                            
                            <?php $adjunto = $registro->adjunto;
                            
                            if($adjunto == ""){
                                $adjunto = "NADA";
                            } else { $adjunto = "ADJUNTO";}
                            
                            
                            ?>
                            <td><?php echo $adjunto; ?></td>
                   
                            



                            <td>
                                <div class="btn-group" role="group" aria-label="">

                                    <!-- BOTÓN RECIBO  -->
                                    <?php

                                    // COMPROBAR SOLO MES Y DIA PARA QUE SIRVA PARA OTROS AÑOS
                                    // toca extraer el año al campo

                                    if ($registro->fecha != "2022-01-01") {

                                    ?>
                                        <!--  <a href="?controlador=registros&accion=mostrar&id=<?php echo $registro->id; ?>" class="btn btn-success btn-space"><i class="bi bi-file-earmark-spreadsheet"></i></a> -->

                                        <!-- BOTÓN RECIBO 
                                     COMPROBAR SI CAMPO RECIBO ESTÁ A TRUE PARA MOSTRAR ICONO "YA ENVIADO" Y MENSAJE DE AVISO
                                    -->


                                    <?php
                                    $recibo =$registro->recibo;
                                    

                                    if($recibo == 1){

                                        ?>
                                <a href="?controlador=registros&accion=ver_recibo&id=<?php echo $registro->id; ?>&fecha=<?php echo $registro->fecha; ?>&vivienda=<?php echo $vivienda; ?>&consumo=<?php echo $diferenciaLectura; ?>&agua=<?php echo $precioAgua; ?>&comunidad=<?php echo $cargoComunidad; ?>&lant=<?php echo $cacheLecturaAnterior; ?>&lact=<?php echo $mostrarLecturaActual; ?>&cargo=<?php echo $cargoMesApartamento; ?>&info=<?php echo $registro->infoVivienda; ?>&saldo=<?php echo $mostrarSaldo; ?>&recibo=<?php echo $recibo; ?>" class="btn btn-secondary btn-space recibo" data-bs-toggle="tooltip" data-bs-placement="top" title="RECIBO YA ENVIADO"><i class="bi bi-file-earmark-spreadsheet"></i></a>


                                        <?php
                                    } else{
                                        $recibo = 1;

                                    ?>
                               
                                        <a href="?controlador=registros&accion=ver_recibo&id=<?php echo $registro->id; ?>&fecha=<?php echo $registro->fecha; ?>&vivienda=<?php echo $vivienda; ?>&consumo=<?php echo $diferenciaLectura; ?>&agua=<?php echo $precioAgua; ?>&comunidad=<?php echo $cargoComunidad; ?>&lant=<?php echo $cacheLecturaAnterior; ?>&lact=<?php echo $mostrarLecturaActual; ?>&cargo=<?php echo $cargoMesApartamento; ?>&info=<?php echo $registro->infoVivienda; ?>&saldo=<?php echo $mostrarSaldo; ?>&recibo=<?php echo $recibo; ?>" class="btn btn-warning btn-space recibo" data-bs-toggle="tooltip" data-bs-placement="top" title="Pulse para generar recibo"><i class="bi bi-file-earmark-spreadsheet"></i></a>

                                        <?php } ?>
                                        <!-- BOTÓN BORRAR -->
                                        <a href="?controlador=registros&accion=borrar&id=<?php echo $registro->id; ?>&apartamento=<?php echo $registro->apartamento; ?>" class="btn btn-danger btn-space borrar" data-bs-toggle="tooltip" data-bs-placement="top" title="Pulse para eliminar"><i class="bi bi-trash"></i></a>


                                    <?php } else { ?>

                                        <a href="#" class="btn btn-secondary btn-space"><i class="bi bi-dash-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Recibo no disponible"></i></a>
                                        <a href="#" class="btn btn-secondary btn-space"><i class="bi bi-dash-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="No puede ser eliminado"></i></a><?php } ?>



                                    <!-- BOTÓN EDITAR -->
                                    <a href="?controlador=registros&accion=editar&id=<?php echo $registro->id; ?>&lant="<?php echo $cacheLecturaAnterior; ?> class="btn btn-info btn-space" data-bs-toggle="tooltip" data-bs-placement="top" title="Pulse para editar"><i class="bi bi-pencil-square"></i></a>




                                </div>
                            </td>


                        </tr>

                    </form>

                <?php } ?>

            </tbody>
        </table>

<!--
        <table class="table table-bordered table-striped">
            <tr>
                <td>
                    <h5><strong>TOTAL CARGOS: </strong><?php




                                                        if ($totalCargos < 0) {
                                                            $totalCargos = $totalCargos * -1;
                                                        }

                                                        $tCargos = cambioDecimal($totalCargos);
                                                        $tIngresos = cambioDecimal($saldoInicial + $totalIngresos);

                                                        $difer = $totalIngresos - $totalCargos;
                                                        $diferTotal = cambioDecimal($difer);



                                                        echo ' ' . $tCargos . ' €'; ?></h5>
                </td>

                <td>
                    <h5><strong>TOTAL INGRESOS:</strong> <?php echo ' ' . $tIngresos . ' €'; ?></h5>
                </td>

                <?php
                if ($diferTotal < 0) {

                ?><td>
                        <h5><strong>SALDO ACTUAL:</strong>
                            <font color=red><?php echo ' ' . $diferTotal . ' €'; ?></font>
                        </h5>
                    </td>
                <?php
                } else {
                ?><td>
                        <h5><strong>SALDO ACTUAL:</strong><?php echo ' ' . $diferTotal . ' €'; ?><h5>
                    </td>
                <?php
                }

                ?>

            <tr>
        </table> -->
    </div>


</div>

<script>
    // MODAL PARA CONFIRMAR BORRADO DE REGISTRO 
</script>