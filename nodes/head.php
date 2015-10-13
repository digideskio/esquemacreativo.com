<head>
	<!-- Begin Basic Needs Metadata -->
    <title>WIWUX MEDIA | Agencia de Marketing Digital <?php if(isset($meta_titulo)){ echo " | ".$meta_titulo; } ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta content="es" http-equiv="content-language">
    <meta content="text/javascript" http-equiv="content-script-type">
    <meta content="text/css" http-equiv="content-style-type">
    <meta content="no" http-equiv="imagetoolbar">
    <meta content="<?php echo $meta_descripcion; ?>" name="description">
    <meta content="<?php echo $meta_keywords; ?>" name="keywords">
    <meta name="author" content="Camilo Ruiz | WIWUX MEDIA">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="document-rating" content="General" >
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php
        if($_SERVER['SERVER_NAME'] == 'localhost'){
        	
        	echo('<base href="http://localhost/esquemacreativo.bl.ee/public_html/">');
        	
        }else{
        	echo('<base href="http://'.$_SERVER['SERVER_NAME'].'">');
        }
        ?>
    <!-- End Metadata -->
		
	<!-- CSS Stylesheets -->
	
	<!-- Latest compiled and minified CSS 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/content/css/bootstrap.min.css">
	
	<!-Optional theme-> 
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/content/css/bootstrap-theme.min.css">
	-->
	
	<!-- Bootstrap core CSS -->
	<link href="content/css/bootstrap.min.css" rel="stylesheet">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="content/css/rev-settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="content/css/extralayers.css" media="screen" />	
	<!-- Style CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Customize CSS -->
	<link href="content/css/custom.css" rel="stylesheet">
    <!-- Responsive CSS -->
	<link href="content/css/responsive.css" rel="stylesheet">
    <!-- Theme Option CSS -->
    <link rel="stylesheet" href="content/css/theme-options.css" media="all">
    <!-- Switch Style -->
    <link rel="stylesheet" href="content/css/colors/default.css" type="text/css" id="colors" />
	
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="placeholders/ico/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="placeholders/ico/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="placeholders/ico/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="placeholders/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="placeholders/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="placeholders/ico/apple-touch-icon-144x144.png">
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5shiv.js"></script>
	  <script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>