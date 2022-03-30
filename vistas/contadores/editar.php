<div class="card">
    <div class="card-header">
        AÑADIR LECTURA CONTADOR
    </div>
    <div class="card-body">
        <form action="" method="post">

       <div class="mb-3">
          <label for="" class="form-label"></label>
          <input readonly hidden type="text"
            class="form-control" value="<?php  echo $contador->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID">
        </div> 


        <div class="mb-3">
              <label for="fecha" class="form-label">FECHA:</label>
              <input required type="date"
                class="form-control" value="<?php echo $contador->fecha; ?>" name="fecha" id="fecha" aria-describedby="helpId" placeholder="fecha">

            </div>

            <div class="mb-3">
              <label for="apartamento" class="form-label">VIVIENDA:</label>
              <input required type="text" class="form-control" value="<?php echo $contador->apartamento; ?>" name="apartamento" id="apartamento" aria-describedby="emailHelpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="lectura" class="form-label">LECTURA ACTUAL:</label>
              <input required type="number"
                class="form-control" value="<?php echo $contador->lectura; ?>" name="lectura" id="lectura" aria-describedby="helpId" placeholder="lectura">

            </div>

            <div class="mb-3">
              <label for="observaciones" class="form-label">OBSERVACIONES:</label>
              <input type="text" class="form-control" value="<?php echo $contador->observaciones; ?>" name="observaciones" id="observaciones" aria-describedby="emailHelpId" placeholder="">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="ACTUALIZAR">
            <a href="?controlador=contadores&accion=consultarRegistrosApartamento&apartamento=<?php echo $contador->apartamento; ?>" class="btn btn-primary">CANCELAR</a>



        </form>
    </div>

</div>