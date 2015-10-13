

<!-- head-->
<header class="<?php if(!isset($_REQUEST['content'])){ 
    echo ('glass');
     }elseif($_REQUEST['content']==''){
      echo ('glass');
       }elseif($_REQUEST['content']=='sobremi'){
      echo ('glass');
       }else{
    echo ('dark');
    }?>">
    <section class="topbar clearfix"  <?php if(!isset($_REQUEST['content'])){ 
        echo ('style="display: none"');
         }elseif($_REQUEST['content']==''){
          echo ('style="display: none"');
           }elseif($_REQUEST['content']=='sobremi'){
          echo ('style="display: none"');
           }else{
        echo ('style="display: block"');
        }?>>
        <div class="container">
            <div class="row">
                <div class="t-left col-sm-7 clearfix">
                    <span>	<i class="fa fa-map-marker"></i> Calle 86b 89a 30 Bogotá, Colombia</span>
                    <span>	<i class="fa fa-envelope"></i> <a href="mailto:hola@esquemacreativo.com">hola@esquemacreativo.com</a></span> 
                    <span>	<i class="fa fa-phone"></i> +57 1 3132144684</span> 
                </div>
                <!--end:t-left-->
                <div class="t-right col-sm-5 clearfix">
                    <ul class="nav">
                        <li><a href="#loginBox"  data-toggle="modal">	<i class="fa fa-user"></i>Acceso Clientes</a></li>
                        <li class="tn-language">
                            <a href="#">	<i class="fa fa-globe"></i>	Language</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> English</a></li>
                                <li><a href="#"> French</a></li>
                                <li><a href="#"> German</a></li>
                                <li><a href="#"> Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--end:t-right-->
                <!--modal login box-->
                <div class="modal fade" id="loginBox">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Acceso Clientes</h4>
                            </div>
                            <div class="modal-body row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <label for="username"> Usuario :</label>
                                        <input id="username" type="text" aria-required="true" size="30" value="" name="username">
                                    </p>
                                    <p> <a href="#">» Crear cuenta</a>	</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <label for="password"> Contraseña :</label>
                                        <input id="password" type="password" aria-required="true" size="30" value="" name="password">
                                    </p>
                                    <p> <a href="#">» Olvido su contraseña ?</a> 	</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-violet">Entrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:loginBox-->
            </div>
            <!--end:row-->
        </div>
    </section>
    <!--end:topbar-->
    <div class="nav-container stickmenu clearfix">
        <div class="inner">
            <!-- logo -->
            <a href="index.php" class="logo">
            <img src="content/placeholders/main-logo.png"/> 
            </a>
            <!-- end:logo -->    
            <!-- main-menu -->
            <ul class="main-menu">
                <li class="multi-level-menu active">
                    <a href="/index.php">Inicio</a>
                    <ul class="sub-menu">
                        <li><a href="index1.html">	Home - Creative 1</a> </li>
                        <li><a href="index2.html">	Home - Creative 2</a></li>
                        <li><a href="index3.html">	Home - Creative 3</a></li>
                        <li><a href="index4.html">	Home - Portfolio 1</a></li>
                        <li><a href="shop.html">     Home - eCommerce 1</a></li>
                        <li><a href="shop2.html">    Home - eCommerce 2</a></li>
                        <li><a href="shop3.html">		Home - eCommerce 3</a></li>
                        <li><a href="shop4.html">		Home - eCommerce 4</a></li>
                        <li><a href="onepage.html">		OnePage 1</a></li>
                    </ul>
                </li>
                <li class="multi-level-menu">
                    <a href="?content=portafolio"><span style="color: #8d84e4;">NUEVO:</span> Sitios Web Para Moviles</a>
                </li>
                <!--megamenu-->
                <?php getSerMenu(); ?>
                <li class="multi-level-menu">
                    <a href="?content=portafolio">Portafolio</a>
                    <ul class="sub-menu">
                        <li><a href="under.html">Casos de Éxito</a></li>
	                </ul>
                </li>
                <li class="multi-level-menu">
                    <a href="?content=resultados">Resultados</a>
                </li>
                <li class="multi-level-menu">
                    <a href="?content=sobremi">Empresa</a></a>
                    <ul class="sub-menu">
                        <li><a href="?content=sobremi">Acerca De Mí</a></a></li>
                        <li><a href="under-image.html">El Equipo</a></li>
                    </ul>
                </li>
                <!--submenu-->
                <li class="multi-level-menu">
                    <a href="#">Under Construction</a>
                    <ul class="sub-menu">
                        <li><a href="under.html">			Animate Background</a> </li>
	                    <li><a href="under-image.html">		Image Background</a></li>
	                    <li><a href="under-slide.html">		Slideshow Background</a></li>
	                    <li><a href="under-video.html">		Video Background</a></li>
	                    <li><a href="under-parallax.html">	Parallax Background</a></li>
	                    <li><a href="under-gradient.html">	Gradient Background</a></li>
                            
                        <li><a href="faq.html">		<i class="fa fa-comments-o"></i> F.A.Q</a></li>
                    </ul>
                </li>
                <!--end: submenu-->
                <li style="display: none;">
                    <form id="search-form">
                        <input type="search" placeholder="Search" value="">
                    </form>
                </li>
                <li class="multi-level-menu">
                    <a href="?content=contactenos"><i class="fa fa-comments-o"></i>Contáctenos</a>
                </li>
            </ul>
            <!-- end:main-menu -->
            <?php require_once('nodes/mobile-menu.php'); ?>
        </div>
        <!--end:inner-->
    </div>
    <!--end:nav-container-->
</header>
<!-- end:header -->

