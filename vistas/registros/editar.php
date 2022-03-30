<?php 


?>

<div class="card">
    <div class="card-header">
        EDITAR REGISTRO VIVIENDA <?php echo $registro->apartamento; ?>
    </div>
    <div class="card-body">
        <form action="" method="post">

  
        <div class="mb-3">
          <label for="" class="form-label"></label>
          <input readonly type="text" hidden
            class="form-control" value="<?php  echo $registro->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID registro">
        </div> 

        <div class="row">
        <div class="col">
              <label for="fecha" class="form-label">FECHA:</label>
              <input required type="date"
                class="form-control" value="<?php echo $registro->fecha; ?>" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">

            </div>

            <div class="col">
              <label for="apartamento" class="form-label">VIVIENDA:</label>
              <input required type="text" class="form-control" value="<?php echo $registro->apartamento; ?>" name="apartamento" id="apartamento" aria-describedby="emailHelpId" placeholder="">
            </div>

        </div>
        <div class="row">

            <div class="col">
              <label for="lecturaanterior" class="form-label">LECTURA ANTERIOR:</label>
              <input required type="number"
                class="form-control" value="<?php echo $registro->lecturaAnterior; ?>" name="lecturaanterior" id="lecturaanterior" aria-describedby="helpId" placeholder="" disabled>

            </div>

            <div class="col">
              <label for="lecturaactual" class="form-label">LECTURA ACTUAL:</label>
              <input required type="number" class="form-control" value="<?php echo $registro->lecturaActual; ?>" name="lecturaactual" id="lecturaactual" aria-describedby="emailHelpId" placeholder="" disabled>
            </div> 

            <div class="col">
              <label for="agua" class="form-label">PRECIO AGUA:</label>
              <input required type="number"
                class="form-control" value="<?php echo $registro->agua; ?>" name="agua" id="agua" aria-describedby="helpId" placeholder="" step="any">

            </div>

            <div class="col">
              <label for="comunidad" class="form-label">COMUNIDAD:</label>
              <input required type="number" class="form-control" value="<?php echo $registro->comunidad; ?>" name="comunidad" id="comunidad" aria-describedby="emailHelpId" placeholder="" step="any">
            </div>
        </div>
        <div class="row">

            <!-- SE DEBE VERIFICAR SI LA FECHA DEL REGISTRO ES DIFERENTE A 01/01/2021 NO SE PUEDE MODIFICAR -->
          
          <?php
            if($registro->fecha == "2021-01-01"){ ?>
              <div class="col">
              <label for="comunidad" class="form-label">SALDO INICIAL:</label>
              <input required type="number" class="form-control" value="<?php echo $registro->saldo; ?>" name="saldo" id="saldo" aria-describedby="emailHelpId" placeholder="" step="any" >
            </div>
           <?php  }else{    ?>
          
            <div class="col">
              <label for="comunidad" class="form-label"></label>
              <input hidden type="number" class="form-control" value="<?php echo $registro->saldo; ?>" name="saldo" id="saldo" aria-describedby="emailHelpId" placeholder="" step="any" disabled>
            </div> <?php } ?>

       
            <div class="col">
              <label for="ingreso" class="form-label">INGRESO:</label>
              <input type="number" class="form-control" value="<?php echo $registro->ingreso; ?>" name="ingreso" id="ingreso" aria-describedby="emailHelpId" placeholder="" step="any">
            </div>
        </div>

        <hr>

            <div class="mb-3">
              <label for="info" class="form-label">INFO VIVIENDA:</label>
              <input type="text" class="form-control" value="<?php echo $registro->infoVivienda; ?>" name="infovivienda" id="infovivienda" aria-describedby="emailHelpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="info" class="form-label">INFO CONTADOR:</label>
              <input type="text" class="form-control" value="<?php echo $registro->infoContador; ?>" name="infocontador" id="infocontador" aria-describedby="emailHelpId" placeholder="" disabled>
            </div>
            
              <div class="mb-3">
              <label for="info" class="form-label">ARCHIVOS ADJUNTOS:</label>

        <input type="file" name="adjunto" id="archivo-adjunto">
          </div>
            







            <a href="#"  class="btn btn-danger">ADJUNTAR PDF</a>
            <input name="" id="" class="btn btn-success" type="submit" value="ACTUALIZAR">
            <a href="?controlador=registros&accion=consultarRegistrosApartamento&apartamento=<?php echo $registro->apartamento; ?>" class="btn btn-primary">CANCELAR</a>



        </form>
    </div>

</div>