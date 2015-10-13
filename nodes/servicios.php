

<style>
    .servicios h1{
    margin-bottom: 25px;
    }
    .servicios h2{
    margin-top: 50px; 
    margin-bottom: 30px;
    }
</style>
<?php
    $sql="SELECT * FROM servicios WHERE link_cat = '$_REQUEST[cat]' AND link_ser = '$_REQUEST[ser]'";
    $q=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($q);
    ?>
<div class="page-header title-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><?php echo ucwords(mb_strtolower($data['nombre'],'utf-8')); ?></h1>
                <ul class="breadcrumb">
                    <li><a href="index1.html">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <?php
                        if ($data['categoria'] != 0) { ?>
                    <li><a href="index.php?content=servicios&cat=<?php echo $data['link_cat'] ?>">
                        <?php echo ucwords(mb_strtolower(getCategoryName($data['categoria']),'utf-8')); ?>
                        </a>
                    </li>
                    <?php } ?>
                    <li><?php echo ucwords(mb_strtolower($data['nombre'],'utf-8')); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end:page-title-->
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="servicios">
                            <a class="prettyphoto post-featured-img" href="content/placeholders/blog/1.jpg">
                            <img class="img-rounded" src="content/placeholders/blog/1.jpg">
                            </a>
                            <h1><?php echo ucwords(mb_strtolower($data['nombre'],'utf-8')); ?></h1>
                            <?php echo $data['descripcion'] ?>
                            <hr>
                        </div>
                        <br><br>  
                        <?php
                            $sql5="SELECT * FROM caracteristicas_servicios WHERE servicio = '$data[id]' AND ox = 1 ORDER BY orden";
                            $q5=mysqli_query($con,$sql5);
                            $n5=mysqli_num_rows($q5);
                            if($n5>0){
                            	while($caracteristicas=mysqli_fetch_assoc($q5)){
                             	?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="services-box sb-horizontal" style="margin-left: 20px;">
                                <div class="icon-box">
                                    <i class="fa <?php echo $caracteristicas['fa'] ?>"></i>   
                                </div>
                                <div class="sb-content-wrap">
                                    <h2><?php echo $caracteristicas['nombre'] ?></h2>
                                    <?php echo $caracteristicas['caracteristica'] ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            }
                            ?>
                    </div>
                    <!--end:col--> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-heading line">
                            <h3> Get in touch</h3>
                        </div>
                        <p>Add forms with different fields, captchas, buttons, create awesome texts with nice elements or just add simple box with contact details.</p>
                        <div class="contact-wrap">
                            <form id="contact-form" action="processForm.php" method="post">
                                <p class="input-block">
                                    <label class="required" for="contact_name">Name <span>*</span></label>
                                    <input class="valid" type="text" name="name" id="contact_name" value="">
                                </p>
                                <p class="input-block">
                                    <label class="required" for="contact_email">Email <span>*</span></label>
                                    <input type="email" class="valid" name="email" id="contact_email" value="">
                                </p>
                                <p class="input-block end">   
                                    <label class="required" for="contact_url">Website</label>                                                            
                                    <input type="url" value="" id="contact_url" name="url">
                                </p>
                                <p class="textarea-block">                        
                                    <label class="required" for="contact_message">Message <span>*</span></label>
                                    <textarea rows="6" cols="40" id="contact_message" name="message"></textarea>
                                </p>
                                <p>                    
                                    <button class="btn btn-violet btn-lg btn-block" type="submit" id="submit-contact"  value="Send message"> Sent message </button>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--end:col-->  
                </div>
                <!--end:row--> 
            </div>
            <!--end:left content -->
            <?php require_once('nodes/sidebarservicios.php'); ?>  
        </div>
        <!--end:row-->	
    </div>
    <!--end:container-->				
</div>
<!--end:main-->
<div class="action-box ab-flat">
    <center>
        <h4>Listo para empezar?</h4>
        <a href="http://themeforest.net/item/one-multipurpose-parallax-html5-template/8469491?ref=woorockets" class="btn btn-large btn-violet btn-icon"> <i class="fa fa-shopping-cart"></i>Contáctenos</a>
    </center>
</div>
<!--end:action-box-->

