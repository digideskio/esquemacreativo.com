<?php
	
	require_once('conn.php');
	
	// Arrays
	
		$src = array(
			"1"=>"Leads"
		);
		
		$referral = array(
			"0"=>"Directo/Indefinido",
			"1"=>"AdWords"
		);
	
	// Messages
		
		// Error Message
		$error = "Se ha presentado un error procesando su solicitud. Por favor intente de nuevo.";
	
	// Processing forms
	
		// Leads process
		if($_POST['query']=='lead'){
			$name = strtoupper($_POST['name']);
			$last_name = strtoupper($_POST['last_name']);
			$email = strtolower($_POST['email']);
			$company = strtoupper($_POST['company']);
			$phone = strtoupper($_POST['phone']);
			// SQL
			$sql="INSERT INTO contacts (name,last_name,email,src,optin) VALUES ('$name','$last_name','$email','$_POST[src]','1')";
			$q=mysql_query($sql);
			if(!$q){
				echo $error;
			}else{
				$id=mysql_insert_id();
				// SQL
				$sql = "INSERT INTO leads (contact,company,phone,src,url,referral) VALUES ('$id','$company','$phone','$_POST[src]','$_POST[url]','$_POST[referral]')";
				$q = mysql_query($sql);
				if(!$q){
					echo $error.mysql_error();
				}else{
					require_once('../include/phpmailer.php');
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
					$html='
						<p>A continuación la información relacionada:</p>
						<p>
							<b>Nombre: </b>'.$name.'<br />
							<b>Apellido: </b>'.$last_name.'<br />
							<b>Email: </b>'.$email.'<br />
							<b>Compañía: </b>'.$company.'<br />
							<b>Teléfono: </b>'.$phone.'<br />
							<b>Formulario: </b>'.$src[$_POST['src']].'<br />
							<b>URL: </b>'.$_POST['url'].'<br />
							<b>Origen: </b>'.$referral[$_POST['referral']].'<br />
						</p>
						';         
					$mail = new PHPMailer();
					$mail->From = 'no-reply@closerdesign.co';
					$mail->FromName = 'Webmaster Closer Design Networks';
					$mail->Subject = utf8_decode('['.$id.'] Nuevo Contacto Potencial: '.$_POST['url']);
					$mail->Body = utf8_decode($html);
					$mail->IsHTML(true);
					$mail->AddAddress('info@closerdesign.co');
					$mail->AddReplyTo($email);
					if(!$sent_mail= $mail->Send()){
						echo $error;
					}else{
						echo 'Gracias por escribirnos. En breve nos pondremos en contacto con usted.<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/984505742/?value=1.00&amp;currency_code=COP&amp;label=WEXcCOr67wYQjru51QM&amp;guid=ON&amp;script=0"/>';
					}
				}
			}
		}
		
		// Quotes process
		if($_POST['query']=='quote'){
			$objetivo = $_POST['objetivo'];
			$tipo = strtoupper($_POST['tipo']);
			$pasarela = strtoupper($_POST['pasarela']);
			$hosting = strtoupper($_POST['hosting']);
			$administrable = strtoupper($_POST['administrable']);
			$adaptable = strtoupper($_POST['adaptable']);
			$sem = strtoupper($_POST['sem']);
			$db = strtoupper($_POST['db']);
			$objeto = strtoupper($_POST['objeto']);
			$empresa = strtoupper($_POST['empresa']);
			$nombre = strtoupper($_POST['nombre']);
			$apellido = strtoupper($_POST['apellido']);
			$email = strtolower($_POST['email']);
			$telefono = $_POST['telefono'];
			$referral = $_POST['referral'];
			
			// Imploding details
			$details = implode("|", array($objetivo,$tipo,$pasarela,$hosting,$administrable,$sem,$db,$objeto,$empresa));
			
			// Insert into database
			$sql = "INSERT INTO contacts (name,last_name,email,phone,details,src,referral,optin) VALUES ('$nombre','$apellido','$email','$telefono','$details','2','$referral','1')";
			$q = mysql_query($sql);
			if(!$q){
				echo "Lo sentimos, se ha presentado un error. Por favor inténtelo de nuevo.";
			}else{
				$id=mysql_insert_id();
				require_once('../include/phpmailer.php');
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$html='
					<p>A continuación la información relacionada:</p>
					<p><b>Objetivo: </b><br />'.$objetivo.'</p>
					<p><b>Tipo de Proyecto: </b><br />'.$tipo.'</p>
					<p><b>¿Requiere sistema de pagos en línea?: </b>'.$pasarela.'</p>
					<p><b>¿Requiere hosting?: </b>'.$hosting.'</p>
					<p><b>¿Administrable?: </b>'.$administrable.'</p>
					<p><b>¿Adaptabilidad a móviles?: </b>'.$adaptable.'</p>
					<p><b>¿Preparado para posicionamiento?: </b>'.$sem.'</p>
					<p><b>¿Base de datos y reportes exportables?: </b>'.$db.'</p>
					<p><b>Objeto de la Compañía: </b><br />'.$objeto.'</p>
					<p><b>Empresa: </b><br />'.$empresa.'</p>
					<p><b>Nombre: </b><br />'.$nombre.'</p>
					<p><b>Apellido: </b><br />'.$apellido.'</p>
					<p><b>Email: </b><br />'.$email.'</p>
					<p><b>Teléfono: </b><br />'.$telefono.'</p>
					<p><b>Origen: </b><br />'.$referral.'</p>
					';         
				$mail = new PHPMailer();
				$mail->From = 'no-reply@closerdesign.co';
				$mail->FromName = 'Webmaster Closer Design Networks';
				$mail->Subject = utf8_decode('['.$id.'] Nueva Solicitud de Cotización: '.$_POST['url']);
				$mail->Body = utf8_decode($html);
				$mail->IsHTML(true);
				$mail->AddAddress('info@closerdesign.co');
				$mail->AddReplyTo($email);
				if(!$sent_mail= $mail->Send()){
					echo $error;
				}else{
					echo 'Gracias por su interés. En breve estará recibiendo la información solicitada.<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/984505742/?label=XhylCKqmlVYQjru51QM&amp;guid=ON&amp;script=0"/>';
				}
			}
		}