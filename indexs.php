<?php require_once('content/php/easily.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> 
<html class="ie ie6 no-js" lang="en">
    <![endif]-->
    <!--[if IE 7 ]>    
    <html class="ie ie7 no-js" lang="en">
        <![endif]-->
        <!--[if IE 8 ]>    
        <html class="ie ie8 no-js" lang="en">
            <![endif]-->
            <!--[if IE 9 ]>    
            <html class="ie ie9 no-js" lang="en">
                <![endif]-->
                <!--[if gt IE 9]><!-->
                <html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
                    <!--<![endif]-->
                    <?php require_once('nodes/head.php'); ?>
                    <body>
                        <div id="pageloader">
                            <div class="loader-item">
                                <img src="content/img/loading.gif" alt='loader' />
                            </div>
                        </div>
                        <!--end:preloader-->
                        <!--wrapper-->
                        <div class="wrapper">
                        <?php require_once('nodes/header.php'); ?>
                        <?php
				
							$file = "nodes/".$_REQUEST['content'].".php";
							
							if(!isset($_REQUEST['content'])){
								
								require "nodes/home.php";
								
							}elseif(file_exists($file)){
								
								require $file;
								
							}else{
								
								require "nodes/404.php";
								
							}
							
							?>
                        <?php require_once('nodes/modals.php'); ?>
                        <?php require_once('nodes/footer.php'); ?>
                    </body>
                </html>

