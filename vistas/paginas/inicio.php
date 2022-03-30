<?php




if (!isset($_SESSION['nombre'])) {
    header('Location:login.php');
}


if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1: // ADMINISTRADOR
        header('Location:./?controlador=registros&accion=inicio');

            break;
        case 2: // USUARIO LECTOR CONTADORES
            header('Location:./?controlador=contadores&accion=inicio');
            break;
    }
}

?>

  <h1 class="display-3">COMUNI_APP v2.1</h1>
        <p class="lead">(c)2021 <a href="mailto:ml.patri@gmail.com">Miguel López Patricio</a></p>
        <p class="lead">Aplicación de gestión comunidad de propietarios "Jardín del Sur"</p>

        <hr class="my-2">

<div  style="margin: auto;
            padding : 4px;
            width : 1000px;
            height : 350px; 
            overflow:auto;" class="p-5 bg-light">
    <div  class="container">
      


        <p class="lead">Actualizaciones en la aplicación:</p>

   <p>(19/10/2021)</p>
        <p>
           
            - Añadida opción ADMINISTRAR USUARIOS APLICACIÓN solo para admin de la app.
            
        </p>
  
  
        <p>(14/10/2021)</p>
        <p>
           
            - Se genera recibo mensual en PDF y se envía por mail.<br>
             - Implementar https
            
        </p>

        <p>(13/10/2021)</p>
        <p>
           
            - Anular/permitir acceso opciones menú según usuario.
            
        </p>




        <p>(11/10/2021)</p>
        <p>
           
            - Se genera ya el recibo correspondiente al registro seleccionado.
        </p>


        <p>(9/10/2021)</p>
        <p>
           
            - Implementada búsqueda en tabla datos personales.
        </p>

        <p>(8/10/2021)</p>
        <p>
            - Inclusión de modal de confirmación de borrado de registros.  <br>
            - Redireccionamiento en CONTADORES. Estando en EDICIÓN regresa al listado de registros deL CONTADOR en curso. <br>
            - Rediseños varios: tablas, botones,...
        </p>


        <p>(1/10/2021)</p>
        <p>
            - Redireccionamiento en VIVIENDAS. Estando en EDICIÓN regresa al listado de registros de la vivienda en curso.
        </p>

        <br>
        <p class="">(30/9/2021)</p>

        <p>
        - Cambios de diseño: 
       <br>
            - Mostrar datos numéricos referidos a moneda en decimal.
            <br>
            - En REGISTROS mostrar columnas LECTURA MES ANTERIOR Y LECTURA MES ACTUAL
            <br>
            - En REGISTROS mostrar todos los existentes aunque no tengan lectura de contador.
<br>
      - iconos en acciones.</p>
        <br>

        <p class="">(29/9/2021)</p>

        <p>
            - VALIDAR FORMULARIOS EDICION/NUEVO MEDIANTE JS!!!
            <br>

            - Eliminar columnas ID.
            <br>
            - Cambio PERSONAS por VIVIENDAS y ordenar listado por vivienda.
            <br>
            - Ordenar registros de CONTADORES por fecha y vivienda.
            <br>
            - Eliminada opción BORRAR de CONTADORES.
        </p>


        <p class="">(28/9/2021)</p>
        <p>

            - Relacionar lecturas contadores con registros. <br>
            - Cambio diseño vistas REGISTROS y PERSONAS.


        </p>




        <p class="">(27/9/2021)</p>

        <p>- Añadido listado de registros por apartamento.
            <br>
            - Ordenar registros por fechas.
        </p>


        <p class="">(25/9/2021)</p>

        <p>- Implementado sistema de autenticación.
            <br>
            - Ampliación: contadores (controlador, clase, modelo - tabla).

            <br>

        </p>


        <p class="">(22/9/2021)</p>

        <p>- Diversas mejoras de la interfaz.



        </p>


        <p class="">Inicio desarrollo aplicación: (01/9/2021)</p>

        <p>Programación de aplicación de gestión de Comunidad de propietarios.
            <br>
            En una primera versión se busca automatizar la gestión de recibos mensuales.
            <br>
            Desarrollo en lenguaje php utilizando el patrón de diseño MVC.
            <br>
            Gestor de bases de datos relacional phpmyadmin MySQL.
            <br>
            Diseño de interfaces con librería css/js Bootstrap.


        </p>

        <p class="lead"> TO-DO: </p>

        <P>
        * Posibilidad de cerrar año y abrir nuevo con datos del anterior (si existe).    
        <br>    
            
        * FLAGS PARA CONTROL DE TIPO TASA DE COMUNIDAD DE VIVIENDAS: 0 - 30€ // 1 - 28€ 
        <br>
        Esto serviría para rellenar campo COMUNIDAD por defecto en registros viviendas.
        <br>
        Esto debería de estar en un archivo tipo json y poder modificarse desde menú???
        <br>


            * Incluir las librerías bootstrap en local. Crear carpeta para ello.
            <br>
            * En los modos de EDICIÓN / AÑADIR si se viene de, por ejemplo, A1, que aparezca ya el dato.
            <br>
         

            * Cambiar formato fechas DD/MM/AAAA aunque el cliente no le da importancia.
            <br>
            * Enlace directo entre columna APARTAMENTO, en vista LISTADO PERSONAS, con vista REGISTROS.
   
        </P>



        <!--
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="./logout_proceso.php" role="button">CERRAR SESIÓN</a>
        </p>
         -->
    </div>
</div>