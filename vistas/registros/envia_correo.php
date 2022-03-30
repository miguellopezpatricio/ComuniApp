<?php

function cambioDecimal($num)
{

  return number_format($num, 2, ',', '.');
}


$id = $_GET['id'];
$fecha = $_GET['fecha'];
$vivienda = $_GET['vivienda'];
$lecturaAnterior = intval($_GET['lant']);
$lecturaActual = intval($_GET['lact']);
$cargo = $_GET['cargo'];
$consumo = $_GET['consumo'];
$agua = $_GET['agua'];
$comunidad = $_GET['comunidad'];
$info = $_GET['info'];
$saldo = $_GET['saldo'];
$recibo = $_GET['recibo'];

Registro::actualizaRecibo($id);


$numMes = substr($fecha, 5, 2);

switch ($numMes) {

  case 1:
    $mes = "ENERO";
    break;
  case 2:
    $mes = "FEBRERO";
    break;
  case 3:
    $mes = "MARZO";
    break;
  case 4:
    $mes = "ABRIL";
    break;

  case 5:
    $mes = "MAYO";
    break;
  case 6:
    $mes = "JUNIO";
    break;
  case 7:
    $mes = "JULIO";
    break;
  case 8:
    $mes = "AGOSTO";
    break;
  case 9:
    $mes = "SETIEMBRE";
    break;
  case 10:
    $mes = "OCTUBRE";
    break;
  case 11:
    $mes = "NOVIEMBRE";
    break;
  case 12:
    $mes = "DICIEMBRE";
    break;
  default:
    $mes = "MES NO DISPONIBLE";
}


?>

<?php
// TOCA LLAMAR AL CONTROLADOR PERSONA PARA GENERAR OBJETOS PERSONA Y CONSEGUIR LOS DATOS DE PROPIETARIO, INQUILINO Y REPRESENTANTE 
$listaPersonas = (Persona::buscarPersonaApartamento($vivienda));


// crear función que lea $listaPersonas[i];

$nombrePropietario = ""; // mejor valor vacío ""
$telefonoPropietario = "";
$correoPropietario = "";

$nombreInquilino = "";
$telefonoInquilino = "";
$correoInquilino = "";

$nombreRepresentante = "";
$telefonoRepresentante = "";
$correoRepresentante = "";

if ($listaPersonas != null) {

  for ($i = 0; $i < count($listaPersonas); $i++) {

    if ($listaPersonas[$i]->cargo == "PROPIETARIO") {
      $nombrePropietario = $listaPersonas[$i]->nombre;
      $telefonoPropietario = $listaPersonas[$i]->telefono;
      $correoPropietario = $listaPersonas[$i]->correo;
    } elseif ($listaPersonas[$i]->cargo == "INQUILINO") {
      $nombreInquilino = $listaPersonas[$i]->nombre;
      $telefonoInquilino = $listaPersonas[$i]->telefono;
      $correoInquilino = $listaPersonas[$i]->correo;
    } elseif ($listaPersonas[$i]->cargo == "REPRESENTANTE") {
      $nombreRepresentante = $listaPersonas[$i]->nombre;
      $telefonoRepresentante = $listaPersonas[$i]->telefono;
      $correoRepresentante = $listaPersonas[$i]->correo;
    }
  }
}




?>

<?php
ob_start();

?>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

<div class="panel-heading">
  <strong>COMUNIDAD DE PROPIETARIOS BUENA VECINDAD</strong>
</div>
  <div class="panel-body">
  NIF: H-XXXXXXXX<br>
  C/DIRECCION<br>
  PROVINCIA<br>
  MAIL@gmail.com
<br>
</div>

</div>

<br>

<div class="row card table-bordered">
    <div class="panel-heading">
<?php

// MUESTRA DATOS PROPIETARIO

$muestraDatos = "";


if ($nombrePropietario != "") {
  $muestraDatos = "PROPIETARIO: " . $nombrePropietario;
} else {
  $muestraDatos = "";
}


if ($telefonoPropietario != "") {
  $muestraDatos = $muestraDatos ;
} else {
  $muestraDatos = $muestraDatos . "";
}

if ($correoPropietario != "") {
  $muestraDatos = $muestraDatos ;
} else {
  $muestraDatos = $muestraDatos . "";
}

echo $muestraDatos;

?>
<br>
<?php
// MUESTRA DATOS INQUILINO


$muestraDatos = "";


if ($nombreInquilino != "") {
  $muestraDatos = "INQUILINO: " . $nombreInquilino;
} else {
  $muestraDatos = "";
}


if ($telefonoInquilino != "") {
  $muestraDatos = $muestraDatos . "<br>- Teléfono: " . $telefonoInquilino;
} else {
  $muestraDatos = $muestraDatos . "";
}

if ($correoInquilino != "") {
  $muestraDatos = $muestraDatos . " | Correo: " . $correoInquilino;
} else {
  $muestraDatos = $muestraDatos . "";
}

echo $muestraDatos;
?>

<br>
    </div></div>
<br>

<div class="row card table-bordered">
<div class="panel-heading">

  <strong><label for="titulo-recibo" class="form-label"><?php echo 'RECIBO DE AGUA Y COMUNIDAD MES: ' . $mes . ' | VIVIENDA: ' . $vivienda; ?></label></strong>

</div>
</div>
<br>
<?php
// MUESTRA DATOS REPRESENTANTE


$muestraDatos = "";


if ($nombreRepresentante != "") {
  $muestraDatos = "REPRESENTANTE: " . $nombreRepresentante;
} else {
  $muestraDatos = "";
}


if ($telefonoRepresentante != "") {
  $muestraDatos = $muestraDatos . "<br>- Teléfono: " . $telefonoRepresentante;
} else {
  $muestraDatos = $muestraDatos . "";
}

if ($correoRepresentante != "") {
  $muestraDatos = $muestraDatos . " | Correo: " . $correoRepresentante;
} else {
  $muestraDatos = $muestraDatos . "";
}

echo $muestraDatos;
?>


<div class="row card table-bordered">
<div class="panel-heading">

<?php echo ' LECTURA ANTERIOR:' . $lecturaAnterior . '  |    LECTURA ACTUAL:' .$lecturaActual . '  |   CONSUMO:' . $consumo . '  |  PRECIO:' . $agua . '€/m3'; ?>

<br><br>
<?php echo 'CARGO POR AGUA: ' . cambioDecimal($consumo*$agua)  . ' €  |  CUOTA COMUNIDAD: ' . cambioDecimal($comunidad) . ' €'; ?>

<br><br>

<strong>
  <label for="total-cargo" class="form-label">CARGO TOTAL DEL MES: <?php echo cambioDecimal($cargo) . ' €'; ?></label>

</strong>



<hr>

<div class="mb-3">
  <label for="info" class="form-label"><strong></stron>EL SALDO DE SU CUENTA DE LA COMUNIDAD es:
      <?php echo cambioDecimal($saldo) . ' €'; ?></strong></label>

</div>
</div>
</div>

<br/>
<div class="row card table-bordered">
<div class="panel-heading">
  Número de cuenta: xxxxxxxxxxxxxxxxxxx
  
  <br/>Concepto: VIVIENDA,  <strong>Ej: "A1 COMUNIDAD"</strong>
  <br>
</div>
</div>
<div class="row card table-bordered">
<div class="panel-heading">
 
  <h5>OBSERVACIONES:</h5>

  <?php echo $info; ?>
</div>
</div>
  </div>
<hr>
<?php

$html = ob_get_clean();

//echo $html;

// require_once('./dompdf/autoload.inc.php');
require_once('dompdf/autoload.inc.php');

use Dompdf\Dompdf;

$pdf = new Dompdf();

$options = $pdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$pdf->setOptions($options);


$pdf->loadHtml($html);

$pdf->setPaper("A4", "portrait");

$pdf->render();

ob_end_clean(); // para que no se corrompa el documento al generarlo
// $pdf->stream("RECIBO-" . $vivienda . "-" . $mes . ".pdf", array("Attachment" => true));

$enviaPDF =  $pdf->output();// va hacia el mailer
$pdf->stream(); // forzar descarga pdf
//file_put_contents('prueba.pdf',$enviaPDF);
// CÓDIGO PHPMAILER
 include_once('mailer/class.phpmailer.php');

$mail = new PHPMailer(); // create the mail
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = "mail.SERVIDOR.com"; // SMTP server
$mail->Username = 'mail@mail.com';
$mail->Password = 'password';


$mail->SetFrom("mail@mail.com");
// $mail->AddReplyTo("otromail.com");
$mail->addReplyTo('mimail@gmail.com','COMUNIDAD');
$mail->AddAddress('mimail.com','ADMIN APP');
// $mail->AddAddress($correoInquilino);
// $mail->AddAddress($correoRepresentante);

// COPIA OCULTA: SI EXISTE CORREO LO UTILIZA
$mail->AddBCC('mail@gmail.com');
$mail->AddBCC($correoPropietario);
$mail->AddBCC($correoInquilino);
$mail->AddBCC($correoRepresentante);


$mail->Subject = "RECIBO DE AGUA Y COMUNIDAD";
$mail->MsgHTML('Se envia adjunto el recibo del mes.'); // set the body

$mail->AddStringAttachment($enviaPDF, "RECIBO-" . $vivienda . "-" . $mes . ".pdf");

$mail->Send(); // send the mail

exit();

header('Location:./?controlador=registros&accion=consultarRegistrosApartamento&apartamento=' . $vivienda);


?>