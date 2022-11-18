<?php 
	$nombre = $_POST['name'];
	$apellido = $_POST['apellido'];
	$codigo = $_POST['codigo'];
	$email = $_POST['email'];
	$affair = $_POST['asunto'];
	$mensaje = "Nombre: ".$nombre."\nApellido: ".$apellido."\nCodigo Postal: ".$codigo."\nEmail: ".$email."\nMensaje:\n\n".$_POST['mensaje'];


	if(mail('contacto@lmrcomercioexterior.com.ar', $affair, $mensaje)){
		echo  '<script language="javascript"> alert ("Su consulta fue enviada. Responderemos en breve."); window.location.href="../#contact" </script>';
	} else {
        echo '<script language="javascript"> alert ("Ocurrio un error inesperado, intente de nuevo mas tarde"); window.location.href="../#contact" </script>';
}
 ?>



