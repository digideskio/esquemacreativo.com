<?php
	require_once('conn.php');
	require_once('phpmailer.php');
	
	if($_POST['consulta']=='contactenos'){
		$nombre=strtoupper($_POST['nombre']);
		$apellido=strtoupper($_POST['apellido']);
		$email=strtolower($_POST['email']);
		$telefono=strtoupper($_POST['telefono']);
		$ciudad=strtoupper($_POST['ciudad']);
		$empresa=strtoupper($_POST['empresa']);
		$mensaje=$_POST['mensaje'];
		
		$sql="INSERT INTO contactos (nombre,apellido,email,telefono,ciudad,empresa,mensaje,formulario,optin) VALUES ('$nombre','$apellido','$email','$telefono','$ciudad','$empresa','$mensaje','$_POST[consulta]','1')";
		$q=mysqli_query($con,$sql);
		if(!$q){
			echo "Lo sentimos. Se ha presentado un error, por favor inténtelo de nuevo.";
		}else{
			$id=mysqli_insert_id($con);
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$url='http://www.rentandes.com/email/index.html';
			$html=file_get_contents($url);
			$contenido='
				<p>A continuación la información relacionada:</p>
				<p><b>Nombre:</b><br />'.$nombre.'</p>
				<p><b>Apellido:</b><br />'.$apellido.'</p>
				<p><b>Email:</b><br />'.$email.'</p>
				<p><b>Teléfono:</b><br />'.$telefono.'</p>
				<p><b>Ciudad:</b><br />'.$ciudad.'</p>
				<p><b>Empresa:</b><br />'.$empresa.'</p>
				<p><b>Mensaje:</b><br />'.$mensaje.'</p>
			';
			$html=str_replace("{{contenido}}",$contenido,$html);         
			$mail = new PHPMailer();
			$mail->From = 'no-reply@rentandes.com';
			$mail->FromName = 'Rentandes Online';
			$mail->Subject = utf8_decode('['.$id.'] Nuevo mensaje desde el sitio web: '.$nombre.' '.$apellido);
			$mail->Body = utf8_decode($html);
			$mail->IsHTML(true);
			$mail->AddAddress('comercial@rentandes.com');
			$mail->AddBCC('juanc@closerdesign.co');
			$mail->AddReplyTo($email);
			if(!$sent_mail= $mail->Send()){
				echo "Lo sentimos. Se ha presentado un error, por favor inténtelo de nuevo.";
			}else{
				echo "Gracias por escribirnos. Hemos recibido su mensaje y pronto estaremos en contacto con usted.";
			}
		}
	}
	
	if($_POST['consulta']=='renting'){
		
		$nombre=strtoupper($_POST['nombre']);
		$apellido=strtoupper($_POST['apellido']);
		$empresa=strtoupper($_POST['empresa']);
		$cargo=strtoupper($_POST['cargo']);
		$ciudad=strtoupper($_POST['ciudad']);
		$telefono=strtoupper($_POST['telefono']);
		$celular=strtoupper($_POST['celular']);
		$email=strtolower($_POST['email']);
		$equipo=strtoupper($_POST['equipo']);
		$marca=strtoupper($_POST['marca']);
		$modelo=strtoupper($_POST['modelo']);
		$tipo=strtoupper($_POST['tipo']);
		$capacidad=strtoupper($_POST['capacidad']);
		$accesorios=strtoupper($_POST['accesorios']);
		$valor=strtoupper($_POST['valor']);
		$plazo=strtoupper($_POST['plazo']);
		$anticipo=strtoupper($_POST['anticipo']);
		$retoma=strtoupper($_POST['retoma']);
		$vr_anticipo=strtoupper($_POST['vr_anticipo']);
		$porcentaje=strtoupper($_POST['porcentaje']);
		$horas=strtoupper($_POST['horas']);
		$ubicacion=strtoupper($_POST['ubicacion']);
		$mantenimiento=strtoupper($_POST['mantenimiento']);
		$lugar_mantenimiento=strtoupper($_POST['lugar_mantenimiento']);
		
		$detalles=implode("|", array("Equipo",$equipo,"Marca",$marca,"Modelo",$modelo,"Tipo",$tipo,"Capacidad",$capacidad,"Accesorios",$accesorios,"Valor",$valor,"Plazo",$plazo,"Anticipo",$anticipo,"Retoma",$retoma,"Vr. Anticipo",$vr_anticipo,"Porcentaje",$porcentaje,"Horas",$horas,"Ubicación",$ubicacion,"Mantenimiento",$mantenimiento,"Lugar Mantenimiento",$lugar_mantenimiento));
		
		$sql="
			INSERT INTO 
				contactos (
					nombre,
					apellido,
					email,
					telefono,
					ciudad,
					empresa,
					detalles,
					formulario,
					optin
				) VALUES (
					'$nombre',
					'$apellido',
					'$email',
					'$telefono',
					'$ciudad',
					'$empresa',
					'$detalles',
					'$_POST[consulta]'
					,'1'
				)";
		$q=mysqli_query($con,$sql);
		if(!$q){
			echo "Lo sentimos. Se ha presentado un error, por favor inténtelo de nuevo.";
		}else{
			$id=mysqli_insert_id($con);
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$url='http://www.rentandes.com/email/index.html';
			$html=file_get_contents($url);
			$contenido='
				<p>A continuación la información relacionada:</p>
				<p><b>Nombre:</b><br />'.$nombre.'</p>
				<p><b>Apellido:</b><br />'.$apellido.'</p>
				<p><b>Empresa:</b><br />'.$empresa.'</p>
				<p><b>Cargo:</b><br />'.$cargo.'</p>
				<p><b>Ciudad:</b><br />'.$ciudad.'</p>
				<p><b>Teléfono:</b><br />'.$telefono.'</p>
				<p><b>Celular:</b><br />'.$celular.'</p>
				<p><b>Email:</b><br />'.$email.'</p>
				<p><b>Equipo:</b><br />'.$equipo.'</p>
				<p><b>Marca:</b><br />'.$marca.'</p>
				<p><b>Modelo:</b><br />'.$modelo.'</p>
				<p><b>Tipo:</b><br />'.$tipo.'</p>
				<p><b>Capacidad:</b><br />'.$capacidad.'</p>
				<p><b>Accesorios:</b><br />'.$accesorios.'</p>
				<p><b>Valor:</b><br />'.$valor.'</p>
				<p><b>Plazo:</b><br />'.$plazo.'</p>
				<p><b>Anticipo:</b><br />'.$anticipo.'</p>
				<p><b>Retoma:</b><br />'.$retoma.'</p>
				<p><b>Vr. Anticipo:</b><br />'.$vr_anticipo.'</p>
				<p><b>Porcentaje:</b><br />'.$porcentaje.'</p>
				<p><b>Horas:</b><br />'.$horas.'</p>
				<p><b>Ubicación:</b><br />'.$ubicacion.'</p>
				<p><b>Mantenimiento:</b><br />'.$mantenimiento.'</p>
				<p><b>Lugar del mantenimiento:</b><br />'.$lugar_mantenimiento.'</p>
			';
			$html=str_replace("{{contenido}}",$contenido,$html);         
			$mail = new PHPMailer();
			$mail->From = 'no-reply@rentandes.com';
			$mail->FromName = 'Rentandes Online';
			$mail->Subject = utf8_decode('['.$id.'] Nueva solicitud de renting en línea: '.$empresa);
			$mail->Body = utf8_decode($html);
			$mail->IsHTML(true);
			$mail->AddAddress('comercial@rentandes.com');
			$mail->AddBCC('juanc@closerdesign.co');
			$mail->AddReplyTo($email);
			if(!$sent_mail= $mail->Send()){
				echo "Lo sentimos. Se ha presentado un error, por favor inténtelo de nuevo.";
			}else{
				echo "Gracias por escribirnos. Hemos recibido su solicitud y pronto estaremos en contacto con usted.";
			}
		}
	}
?>