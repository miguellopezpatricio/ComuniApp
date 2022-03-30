<!doctype html>
<html lang="en">

<head>
  <title>COMUNI_APP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!--  ICONOS BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <style>
    .btn-space {
      margin-right: 10px;
    }
    .icon-green {
        color: green;
      }
    
  </style>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




  <!-- PARA MODAL Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>


<!--  HRML2PDF -->
<script src="html2pdf.bundle.min.js"></script>

<script src="pdf.js"></script>




</head>

<body>



  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
      <!--  <a class="nav-item nav-link active" href="#">SISTEMA <span class="visually-hidden">(current)</span></a> -->
      <!-- <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">INICIO</a> -->

      <!-- VERIFICAR SI EL USUARIO QUE ACCEDE ES EL ADMINISTRADOR, SINO ES, PONER LOS HREF A # O ANULAR LOS ENLACES. DEBERÍAN SER BOTONES QUIZÁS? -->


      <a class="nav-item nav-link" href="?controlador=personas&accion=inicio"> DATOS PERSONALES |</a>
      <a class="nav-item nav-link" href="?controlador=registros&accion=inicio"> VIVIENDAS |<a>


          <a class="nav-item nav-link" href="?controlador=contadores&accion=inicio"> CONTADORES </a>


          <a class="nav-item nav-link" href=""> | BIENVENIDO: <?php echo $_SESSION['nombre']; ?></a>
          <a class="btn btn-warning" href="./logout_proceso.php" role="button">CERRAR SESIÓN</a>








    </div>
  </nav>



  <br>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php include_once('rooteador.php'); ?>
      </div>

    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>




  <script>
    function confirma(e) {
      if (confirm("¿SEGURO QUE QUIERE BORRAR EL REGISTRO?")) {
        return true;
      } else {
        e.preventDefault();
      }


    }

    let linkDelete = document.querySelectorAll('.borrar');

    for (var i = 0; i < linkDelete.length; i++) {
      linkDelete[i].addEventListener('click', confirma);
    }
  </script>
  
  
  
  
<!--
<script>
    // FUNCIÓN CONFIRMA RECIBO
    function confirmaEnvioRecibo(e) {
      if (confirm("¿DESEA ENVIAR EL RECIBO?")) {
        return true;
      } else {
        e.preventDefault();
      }


    }

    let enlace = document.querySelectorAll('.recibo');

    for (var i = 0; i < enlace.length; i++) {
      enlace[i].addEventListener('click', confirmaEnvioRecibo);
    }
  </script>
  -->

  <script>
    $(function() {

      $('input#search').quicksearch('table tbody tr');
      

    });
    
    
    
// TOOLTIP BOOTSTRAP
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

  </script>

<script src="jquery.quicksearch.min.js"></script>



<br>
<!--
<div class="alert alert-danger" role="alert">
<center>Versión de prueba. No tenga miedo en probar todas las posibilidades de COMUNI_APP!</center> <br>
<center>(c)2021 <a href="mailto:ml.patri@gmail.com">Miguel López Patricio</a></center></div>
-->
</body>

</html>