<?php
$para = 'betomartinezr@hotmail.com,hola@disennio.com';
$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$titulo = $_POST['titulo'];
$asunto=$_POST['asunto']; 
$comentario=$_POST['comentario'];
$mensaje = '<html>
	<head><title>'.$titulo.'</title></head>
	<body><table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border: 0;">
 
 <tr>
 
<td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;border: 0;">
 
 <h1 style="color: #ffffff; font-family: Arial, sans-serif;">Tienes un nuevo comentario de</h1>
 <h3 style="color: #ffffff; font-family: Arial, sans-serif;">'.$nombre.' '.$apellido.'</h3>
 <h3 style="color: #ffffff; font-family: Arial, sans-serif;">'.$correo.'</h3>
 
</td>
 
 </tr>
 
 <tr>
 
<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;border-top: 0;">
 
 <table border="1" cellpadding="0" cellspacing="0" width="100%">
 
<tr>
 
 <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;border: 0;">
 
  Titulo: '.$titulo.'
 
 </td>
 
</tr>
 
<tr>
 
 <td style="padding: 20px 0 30px 0;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;border: 0;">
 
  Comentario: '.$comentario.'
 
 </td>
 
</tr>
 
 
 </table>
 
</td>
 
 </tr>
 
 <tr>
 
<td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;border: 0;">
 
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
 
 <tr>
 
<td width="75%" style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;border: 0;">
 
 Tu empresa 2017 &reg; <br/>
 
 Dirección: Fracc.La Luna Calle 50 Mz-23 Lt-17.
 
</td>
 
 </tr>
 
</table>
 
</td>
 
 </tr>
 
</table>
	</body>
 </html>';
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
/*$cabeceras .= 'From: Jesus Alberto<betomartinezr@hotmail.com>';*/


//nuevo suscriptor

include_once('APImail/MCAPI.class.php');
 
$apikey="c0d2746185e85603b9753005f162b8c3-us15";
 
$mailchimp = new MCAPI($apikey,true);
 
$email=$correo;
//$nombre=$nombre;
 
$listId="ac6cb7be62";
 
$merge_vars = array('FNAME'=>$nombre
                    );
 
$resultado=$mailchimp->listSubscribe( $listId, $email, $merge_vars );
 
//Controlamos los errores
if ($mailchimp->errorCode)
{
	$coderror= "Error - ".$mailchimp->errorCode."\n";
	$menerror= $mailchimp->errorMessage;
	echo '<form id="contacto" class="container formulario" style="padding: 0%; margin: 0%;" method="POST">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<center><h1 style="color:red;"><i class="fa fa-times-circle-o fa-5x" aria-hidden="true"></i></h1></center>
<center><h5 style="color:red;">'.$coderror.'</h5></center>
<center><h4 style="color:red;">'.$menerror.'</h4></center>

</div>
</div>
</form>';
} 
else 
{
   $enviado = mail($para, $asunto, $mensaje,$cabeceras);
 
if ($enviado)
  echo '<form id="contacto" class="container formulario" style="padding: 0%; margin: 0%;" method="POST">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<center><h1 style="color:green;"><i class="fa fa-check-circle-o fa-5x" aria-hidden="true"></i></h1></center>
<center><h2 style="color:green;">Correo enviado exitosamente, revisa tu bandeja de entrada</h2></center>
</div>
</div>
</form>';
else
  echo '<form id="contacto" class="container formulario" style="padding: 0%; margin: 0%;" method="POST">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<center><h1 style="color:red;"><i class="fa fa-times-circle-o fa-5x" aria-hidden="true"></i></h1></center>
<center><h1 style="color:red;">Error al enviar el correo</h1></center>

</div>
</div>
</form>';
}
//nuevo suscriptor


?>