<?php 
	require_once('metas.php'); 
	
	
	if($_SERVER['SERVER_NAME'] == 'localhost'){
		$db_server = "localhost";
		$db_user = "root";
		$db_password = 'root';
		$db_name = "u919715273_websi";
	}else{
		$db_server = "mysql.hostinger.co";
		$db_user = "u919715273_wiwu";
		$db_password = 'camilo.0723';
		$db_name = "u919715273_websi";
	}

	
	
	require_once('conn.php'); 
	
	require_once('functions.php');
	
	require_once('phpmailer.php');
	
	///////////////// Opciones Editables /////////////////////

	$receiving_email_address = "backup@esquemacreativo.com";  // Establezca la dirección de correo electrónico donde desea recibir los mensajes.

	$custom_subject = "Nueva Solicitud desde [Esquema Creativo]"; // Cambie la línea de asunto del correo electrónico por su elección.
	
	$custom_from = "no-reply@esquemacreativo.com"; // este es el correo remitente.
	
	if($_SERVER['SERVER_NAME'] == 'localhost'){
	
		define(URL_NOTIFICACION,"http://localhost/esquemacreativo.bl.ee/public_html/content/email/index.php");
	
	}else{
		define(URL_NOTIFICACION,"http://".$_SERVER['SERVER_NAME']."/content/email/index.php");
	}
	
	
	
	define(EMAIL_NOTIFICACIONES,"backup@esquemacreativo.com"); // este deberia ser el mail donde recoge la base de datos
	
	define(FROM_NAME,"Webmaster Esquema Creativo"); // este es el nombre del remitente
	/////////////////////////////////////////////////////////
?>

