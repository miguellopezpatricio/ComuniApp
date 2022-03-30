<?php 

$vivienda = $_GET['apartamento'];

$fechaActual = date("Y-m-d");

?>



<div class="card">
  <div class="card-header">
    AÑADIR REGISTRO
  </div>
  <div class="card-body">
    <form action="" method="post">

      <div class="row">

        <div class="col">
          <label for="fecha" class="form-label">FECHA:</label>
          <input required type="date" value="<?php echo $fechaActual; ?>" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">


        </div>



        <div class="col">
          <label for="apartamento" class="form-label">VIVIENDA:</label>
          <input required value="<?php echo $vivienda; ?>" type="text" class="form-control" name="apartamento" id="apartamento" aria-describedby="emailHelpId">
        </div>

      </div>

      <div class="row">



        <div class="col">
          <label for="agua" class="form-label">AGUA:</label>
          <input value="<?php echo number_format(3.05, 2, ',', '.'); ?>" class="form-control" name="agua" id="agua" aria-describedby="helpId" placeholder="" step="any">

        </div>

        <!-- <div class="col">
          <label for="comunidad" class="form-label">COMUNIDAD:</label>
          <input required type="number" class="form-control" name="comunidad" id="comunidad" aria-describedby="emailHelpId" placeholder="" step="any">
        </div> -->


        <div class="col">
          <label for="cargo" class="form-label">COMUNIDAD:</label>
          <input type="radio" name="comunidad" value="30" checked> 30 € 
          <input type="radio" name="comunidad" value="28"> 28 € <br>


        </div>





        <div class="col">
          <label for="ingreso" class="form-label">INGRESO:</label>
          <input type="number" class="form-control" name="ingreso" id="ingreso" aria-describedby="emailHelpId" placeholder="" step="any">
        </div>
      </div>

      <hr>

      <div class="mb-3">
        <label for="info" class="form-label">INFO VIVIENDA:</label>
        <input type="text" class="form-control" name="infovivienda" id="infovivienda" aria-describedby="emailHelpId" placeholder="">
      </div>


            <div class="mb-3">
              <label for="info" class="form-label">ARCHIVOS ADJUNTOS:</label>

        <input type="file" name="adjunto" id="archivo-adjunto">
          </div> 
            

    <a href="#"  class="btn btn-danger">ADJUNTAR PDF</a> 

      <input name="" id="" class="btn btn-success" type="submit" value="AÑADIR">

      <a href="?controlador=registros&accion=inicio" class="btn btn-primary">CANCELAR</a>

    </form>
  </div>

</div>