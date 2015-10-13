<?php
	$db_server = "mysql.hostinger.co";
	$db_user = "u919715273_wiwu";
	$db_password = 'camilo.0723';
	$db_name = "u919715273_websi";
	
	//mysql_connect("mysql.hostinger.co","u919715273_wiwu","camilo.0723")or die(utf8_decode("No hay conexión con la base de datos."));
	//mysql_select_db("u919715273_websi")or die(utf8_decode("No se puede seleccionar la base de datos."));
	//mysql_query("SET NAMES 'utf8'");
	
	$con = mysqli_connect("$db_server","$db_user","$db_password","$db_name")or die("DB Error");
	mysqli_query($con,"SET NAMES utf8");
?>