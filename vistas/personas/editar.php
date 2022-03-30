<div class="card">
  <div class="card-header">
    EDITAR REGISTRO
  </div>
  <div class="card-body">
    <form action="" method="post">

      <div class="mb-3">
        <label for="" class="form-label"></label>
        <input readonly type="text" hidden class="form-control" value="<?php  echo $persona->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID persona">
      



      <div class="mb-3">
        <label for="nombre" class="form-label">NOMBRE:</label>
        <input required type="text" class="form-control" value="<?php echo $persona->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">

      </div>

      <div class="row">
      <div class="col">
        <label for="telefono" class="form-label">TELEFONO:</label>
        <input required type="number" class="form-control" value="<?php echo $persona->telefono; ?>" name="telefono" id="telefono" aria-describedby="helpId" placeholder="telefono">

      </div>

      <div class="col">
        <label for="correo" class="form-label">CORREO:</label>
        <input required type="email" value="<?php echo $persona->correo; ?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="">
      </div>

      <div class="col">
        <label for="apartamento" class="form-label">VIVIENDA:</label>
        <input required type="text" class="form-control" value="<?php echo $persona->apartamento; ?>" name="apartamento" id="apartamento" aria-describedby="helpId" placeholder="apartamento" >


      </div>
      </div>

      <div class="mb-3">
        <label for="cargo" class="form-label">CARGO:</label>

        <!--
        <select name="cargo" id="cargo">

          <option value="PROPIETARIO">PROPIETARIO</option>
          <option value="INQUILINO">INQUILINO</option>
          <option value="ADMINISTRADOR">ADMINISTRADOR</option>
        </select> -->
        <br>

        <input type="radio" name="cargo" value="PROPIETARIO" checked> PROPIETARIO <br>
        <input type="radio" name="cargo" value="INQUILINO"> INQUILINO <br>
        <input type="radio" name="cargo" value="REPRESENTANTE"> REPRESENTANTE



      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="ACTUALIZAR">
      <a href="?controlador=personas&accion=inicio" class="btn btn-primary">CANCELAR</a>

    </form>
  </div>

</div>