<div class="card">
  <div class="card-header">
    NUEVO PROPIETARIO/INQUILINO
  </div>
  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="nombre" class="form-label">NOMBRE:</label>
        <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre y apellidos">

      </div>

      <div class="row">
        <div class="col">
          <label for="telefono" class="form-label">TELEFONO:</label>
          <input required type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="telefono persona">

        </div>




        <div class="col">
          <label for="correo" class="form-label">CORREO:</label>
          <input required type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="mi@correo.com">
        </div>

        <div class="col">
          <label for="apartamento" class="form-label">VIVIENDA:</label> <br>
          <input required type="text" class="form-control" name="apartamento" id="apartamento" aria-describedby="helpId" placeholder="LETRA A->C NÚMERO 1->8">

          <!-- <select name="letra" id="letra">

            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>

          <select name="numero" id="numero">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select> -->
        </div>
      </div>


    



      <div class="mb-3">
        <label for="cargo" class="form-label">SELECCIONA CARGO:</label>

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



      <input name="" id="" class="btn btn-success" type="submit" value="AÑADIR">

      <a href="?controlador=personas&accion=inicio" class="btn btn-primary">CANCELAR</a>

    </form>
  </div>

</div>



<script>

  // SCRIPT JS PARA VALIDAR VIVIENDA EN FORMULARIOS
  // utilizar expresiones regulares

  // var pattern = /[A-C,a-c][1-8]/;

  var expRegVivienda = "[A-C][0-8]";

  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
  });

  function validarFormulario(evento) {
    evento.preventDefault();

    var clave = document.getElementById('apartamento').value;
    if (clave.match(expRegVivienda) == null) {
      alert('IDENTIFICADOR DE VIVIENDA NO VÁLIDO.\n LETRA A -> C NÚMERO 0 -> 8');
      return;
    }
    this.submit();
  }
</script>