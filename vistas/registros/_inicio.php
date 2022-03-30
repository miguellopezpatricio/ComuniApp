
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=registros&accion=crear" role="button">AÑADIR REGISTRO</a>

<br>
        <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>FECHA</th>
            <th>APARTAMENTO</th>
            <th>LECTURA_INICIAL</th>
            <th>CONSUMO</th>
            <th>AGUA</th>
            <th>COMUNIDAD</th>
            <th>CARGO</th>
            <th>INGRESO</th>
            <th>INFO</th>

            <th>ACCIONES</th>
            
        </tr>
    </thead>
    <tbody>

    <?php foreach ($registros as $registro) {?>

        <tr>
            <td><?php echo $registro->id; ?></td>
            <td><?php echo $registro->fecha; ?></td>


            <td>
                
            <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=<?php echo $registro->apartamento; ?>"><?php echo $registro->apartamento; ?></a></td>
            <td><?php 
            
            // Este dato tiene que leerlo de la lectura de contadores y guardarlo en una variable

            // $buscaApart = $registro->apartamento; $buscaFecha = $registro->fecha; OJO! BUSCAR POR MES DE FECHA!
            // $buscaLectura = 'SELECT lectura FROM contadores WHERE fecha = $buscaFEcha AND apartamento = $buscaApart';

            // habrá que crear una función que con explode() compare el mes del registro con el mes del contador

            // $fechaRegistro = explode("-",$buscaFecha); $mesRegistro = $fechaRegistro[1];


            echo $registro->lectura; // esta sería la lectura del mes anterior
            
            
            ?></td>
            <td><?php echo $registro->consumo;// SE MOSTRARÍA EL RESULTADO DE LA BÚSQUEDA EN LA TABLA CONTADORES ?></td>
            <td><?php echo $registro->agua; ?></td>
            <td><?php echo $registro->comunidad; ?></td>
            <td><?php echo $registro->cargo; ?></td>
            <td><?php echo $registro->ingreso; ?></td>
            <td><?php echo $registro->info; ?></td>


            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=registros&accion=editar&id=<?php echo $registro->id; ?>" class="btn btn-info">EDITAR</a>
                    
                    <a href="?controlador=registros&accion=borrar&id=<?php echo $registro->id; ?>" class="btn btn-danger">BORRAR</a>

                </div>
            </td>


        </tr>

        <?php } ?>
 
    </tbody>
</table>

    </div>

  
</div>

