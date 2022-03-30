

<div class="card">
<div class="card-header">

<h3><!--  <a name="" id="" class="btn btn-success" href="?controlador=registros&accion=crear" role="button">AÑADIR REGISTRO VIVIENDA</a> | --> 
VIVIENDAS | ESCOGE VIVIENDA</h3><br>








    <table class="table table-bordered table-striped">

    <tr>
  
    <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=A0" class="btn btn-primary">A0</a></td>
    <td> <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="ENVIAR RECIBOS"> @ </a></td>

    </tr>

        <tr>

        <?php 

        // CREAR UN BUCLE FOR PARA GENERAR LA TABLA CON LOS BOTONES Y ENLACES

        // LETRAS A-> C   NUMEROS 1 -> 8
        

        for($a = 1;$a<=8;$a++ ){

            ?><td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=A<?php echo $a;?>" class="btn btn-info">A<?php echo $a; ?></a></td><?php
   }?>

        </tr>

        <tr>

        <?php 

// CREAR UN BUCLE FOR PARA GENERAR LA TABLA CON LOS BOTONES Y ENLACES

// LETRAS A-> C   NUMEROS 1 -> 8


for($a = 1;$a<=8;$a++ ){

    ?><td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B<?php echo $a;?>" class="btn btn-primary">B<?php echo $a; ?></a></td><?php

}?>

        </tr>

<tr>
<?php 

// CREAR UN BUCLE FOR PARA GENERAR LA TABLA CON LOS BOTONES Y ENLACES

// LETRAS A-> C   NUMEROS 1 -> 8


for($a = 1;$a<=8;$a++ ){

?><td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=C<?php echo $a;?>" class="btn btn-info">C<?php echo $a; ?></a></td><?php

}?>
</tr>
    
        
        <!--
        <tr>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B1" class="btn btn-success">B1</a></td>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B2" class="btn btn-success">B2</a></td>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B3" class="btn btn-success">B3</a></td>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B4" class="btn btn-success">B4</a></td>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B5" class="btn btn-success">B5</a></td>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B6" class="btn btn-success">B6</a></td>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B7" class="btn btn-success">B7</a></td>
            <td> <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=B8" class="btn btn-success">B8</a></td>

        </tr>
    -->


    </table>

    </div>

</div>