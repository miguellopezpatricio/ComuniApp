<?php 

$vivienda = $_GET['apartamento'];
// $fecha = $_GET['fecha'];
$fechaActual = date("Y-m-d");

?>


<div class="card">
    <div class="card-header">
        AÑADIR LECTURA CONTADOR
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="fecha" class="form-label">FECHA:</label>
              <input required type="date" value="<?php echo $fechaActual; ?>"
                class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="fecha">

            </div>

            <div class="mb-3">
              <label for="apartamento" class="form-label">VIVIENDA:</label>
              <input required value="<?php echo $vivienda; ?>" type="text" class="form-control" name="apartamento" id="apartamento" aria-describedby="emailHelpId">
            </div>

            <div class="mb-3">
              <label for="lectura" class="form-label">LECTURA ACTUAL:</label>
              <input required type="number"
                class="form-control" name="lectura" id="lectura" aria-describedby="helpId" placeholder="">

            </div>

            <div class="mb-3">
              <label for="observaciones" class="form-label">OBSERVACIONES:</label>
              <input type="text" class="form-control" name="observaciones" id="observaciones" aria-describedby="emailHelpId" placeholder="INFORMACIÓN ADICIONAL">
            </div>



            <input name="" id="" class="btn btn-success" type="submit" value="AÑADIR">

            <a href="?controlador=contadores&accion=inicio" class="btn btn-primary">CANCELAR</a>

        </form>
    </div>

</div>