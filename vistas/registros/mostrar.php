<!-- PARA QUE FUNCIONE, LOS DATOS DE LA FILA DE LA TABLA SELECCIONADA PARA GENERAR EL RECIBO, 

                      SE DEBEN CAPTURAR CON JAVASCRIPT 
                    AL PULSAR EL BOTÓN DE GENERAR RECIBO 
              
                    SE MOSTRARÍA UN MODAL CON EL RECIBO Y DOS BOTONES UNO GENERA PDF Y OTRO CANCELA -->


<?php
// VERIFICANDO VALORES DE $listaPersonas

$nombreInquilino = '';
$nombrePropietario = '';
$nombreRepresentante = '';

if ($listaPersonas == null) {
  $nombreInquilino = 'NO HAY DATOS';
  $nombrePropietario = 'NO HAY DATOS';
  $nombreRepresentante = 'NO HAY DATOS';
} else {
  $nombreInquilino = $listaPersonas[0]->nombre;
  $nombrePropietario = $listaPersonas[1]->nombre;
  $nombreRepresentante = $listaPersonas[2]->nombre;
}


?>


<div class="card">
  <div class="card-header">
    <strong>COMUNIDAD DE PROPIETARIOS "Buena Vecindad" NIF: XXXX.XXXX.X</strong>
    <hr>

    <!-- RECIBO VIVIENDA <?php // echo $registro->apartamento; 
                          ?> -->
    <div class="row">
      <div class="col">
        <label for="fecha" class="form-label">FECHA:</label>
        <input required type="date" class="form-control" value="<?php echo $registro->fecha; ?>" name="fecha" id="fecha" aria-describedby="helpId" placeholder="" disabled>

      </div>

      <div class="col">
        <label for="apartamento" class="form-label">APARTAMENTO:</label>
        <input required type="text" class="form-control" value="<?php echo $registro->apartamento; ?>" name="apartamento" id="apartamento" aria-describedby="emailHelpId" placeholder="" disabled>
      </div>
    </div>
    <br>
  </div>

  <div class="card-body">
    <form action="" method="post">

      <div class="mb-3">
        <label for="" class="form-label"></label>
        <input readonly type="text" hidden class="form-control" value="<?php echo $registro->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID registro">
      </div>


      <div class="row">

        <div class="col">
          <label for="nombre" class="form-label">PROPIETARIO:</label>
          <input readonly type="text" class="form-control" value="<?php echo $nombrePropietario; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

        <div class="col">
          <label for="nombre" class="form-label">TELÉFONO:</label>
          <input readonly type="text" class="form-control" value="<?php  ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

        <div class="col">
          <label for="nombre" class="form-label">CORREO:</label>
          <input readonly type="text" class="form-control" value="<?php ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>
      </div>

      <div class="row">

        <div class="col">
          <label for="nombre" class="form-label">INQUILINO:</label>
          <input readonly type="text" class="form-control" value="<?php echo $nombreInquilino; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

        <div class="col">
          <label for="nombre" class="form-label">TELÉFONO:</label>
          <input readonly type="text" class="form-control" value="<?php   ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

        <div class="col">
          <label for="nombre" class="form-label">CORREO:</label>
          <input readonly type="text" class="form-control" value="<?php  ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>
      </div>

      <div class="row">

        <div class="col">
          <label for="nombre" class="form-label">REPRESENTANTE:</label>
          <input readonly type="text" class="form-control" value="<?php echo $nombreRepresentante; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

        <div class="col">
          <label for="nombre" class="form-label">TELÉFONO:</label>
          <input readonly type="text" class="form-control" value="" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

        <div class="col">
          <label for="nombre" class="form-label">CORREO:</label>
          <input readonly type="text" class="form-control" value="" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>

      </div>
      <br>


      <hr>

      <div class="row">
        <div class="col">

          <label for="lectura" class="form-label">LECTURA ANTERIOR:</label>
          <input required type="number" class="form-control" value="<?php echo $registro->lecturaAnterior; ?>" name="lectura" id="lectura" aria-describedby="helpId" placeholder="" disabled>

        </div>

        <div class="col">
          <label for="consumo" class="form-label">LECTURA ACTUAL:</label>
          <input required type="number" class="form-control" value="<?php echo $registro->lecturaActual; ?>" name="consumo" id="consumo" aria-describedby="emailHelpId" placeholder="" disabled>
        </div>

        <div class="col">
          <label for="consumo" class="form-label">CONSUMO:</label>
          <input required type="number" class="form-control" value="" name="consumo" id="consumo" aria-describedby="emailHelpId" placeholder="" disabled>
        </div>

        <div class="col">
          <label for="agua" class="form-label">AGUA:</label>
          <input required type="number" class="form-control" value="<?php echo $registro->agua; ?>" name="agua" id="agua" aria-describedby="helpId" placeholder="" disabled>

        </div>
      </div>

      <div class="row">

        <div class="col">
          <label for="comunidad" class="form-label">CUOTA COMUNIDAD:</label>
          <input required type="number" class="form-control" value="<?php

                                                                    $muestra = $registro->comunidad;
                                                                    $moneda = "euro";
                                                                    $unir = $muestra . $moneda;

                                                                    echo $muestra; ?>" name="comunidad" id="comunidad" aria-describedby="emailHelpId" placeholder="" disabled>

        </div>

        <div class="col">
          <label for="cargo" class="form-label">CARGO:</label>
          <input required type="number" class="form-control" value="cargomes" name="cargomes" id="cargomes" aria-describedby="helpId" placeholder="" disabled>

        </div>

        <div class="col">
          <strong>
            <label for="ingreso" class="form-label">TOTAL:</label>
            <input required type="number" class="form-control" value="<?php echo ''; ?>" name="ingreso" id="ingreso" aria-describedby="emailHelpId" placeholder="0.000,00 €" disabled>
          </strong>
        </div>

      </div>

      <hr>
      <div class="mb-3">
        <label for="info" class="form-label">INFORMACIÓN ADICIONAL:</label>
        <input type="text" class="form-control" value="<?php echo $registro->infoVivienda; ?>" name="info" id="info" aria-describedby="emailHelpId" placeholder="" disabled>
      </div>


      <br>


      <input name="" id="" class="btn btn-danger" type="submit" value="CREAR PDF">
      <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=<?php echo $registro->apartamento; ?>" class="btn btn-primary">CANCELAR</a>

    </form>
  </div>

</div>