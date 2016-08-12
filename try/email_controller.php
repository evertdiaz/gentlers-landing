<?php
if(isset($_POST['correo'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "evertdiaz@gentlers.club";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(

!isset($_POST['correo'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Contacto de Web:\n\n";
$email_message .= "Comentarios: " . $_POST['correo'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "
<html>
<head>
	<title>Gentlers</title>
	<link href='css/bootstrap.css' rel='stylesheet'>
</head>
<body>
	<div style='margin:40vh;text-align:center'>
		<p>¡Gracias por suscribirte al lanzamiento de la plataforma!</p>
		<p>Te prometemos que tendrás grandes sorpresas.</p>
		<a href='index.html'>
			<button type='submit' class='btn btn-default center-block'>Regresar</button>
		</a>
	</div>
</body>
</html>";
}
?>