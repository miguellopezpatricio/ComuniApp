

<div class="card">
<div class="card-header">

<h3><!-- <a name="" id="" class="btn btn-success" href="?controlador=contadores&accion=crear" role="button">AÑADIR LECTURA CONTADOR</a> |--> 
CONTADORES | ESCOGE VIVIENDA</h3><br>








    <table class="table table-bordered table-striped">

    <tr>
  
     <a href="?controlador=contadores&accion=consultarRegistrosApartamento&apartamento=A0" class="btn btn-primary">A0</a>

    </tr>
</table>
      <div style="float: left; padding:5%;"> 

        <?php 

        // CREAR UN BUCLE FOR PARA GENERAR LA TABLA CON LOS BOTONES Y ENLACES

        // LETRAS A-> C   NUMEROS 1 -> 8
        

        for($a = 8;$a >= 1;$a -- ){

            ?><tr> <a href="?controlador=contadores&accion=consultarRegistrosApartamento&apartamento=A<?php echo $a;?>" class="btn btn-info">A<?php echo $a; ?></a></tr><br><br><?php
   }?>
   </div>

    
   
<div style="float: left; padding:5%;"> 
        <?php 

// CREAR UN BUCLE FOR PARA GENERAR LA TABLA CON LOS BOTONES Y ENLACES

// LETRAS A-> C   NUMEROS 1 -> 8


for($a = 8;$a >= 1;$a -- ){

    ?><tr> <a href="?controlador=contadores&accion=consultarRegistrosApartamento&apartamento=B<?php echo $a;?>" class="btn btn-primary">B<?php echo $a; ?></a></tr><br><br><?php

}?>

</div>
<div style="float: left; padding:5%;"> 
<?php 

// CREAR UN BUCLE FOR PARA GENERAR LA TABLA CON LOS BOTONES Y ENLACES

// LETRAS A-> C   NUMEROS 1 -> 8


for($a = 8;$a >= 1;$a -- ){

?><tr> <a href="?controlador=contadores&accion=consultarRegistrosApartamento&apartamento=C<?php echo $a;?>" class="btn btn-info">C<?php echo $a; ?></a></tr><br><br><?php

}?>
</div>
    
        
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