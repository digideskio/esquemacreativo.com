<?php
	
	// Limitar número de palabras
	function limit_words($string, $word_limit)
	{
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit));
	}
	
    function calcularDV($nit) {
        if (! is_numeric($nit)) {
            return false;
        }
     
        $arr = array(1 => 3, 4 => 17, 7 => 29, 10 => 43, 13 => 59, 2 => 7, 5 => 19,
        8 => 37, 11 => 47, 14 => 67, 3 => 13, 6 => 23, 9 => 41, 12 => 53, 15 => 71);
        $x = 0;
        $y = 0;
        $z = strlen($nit);
        $dv = '';
       
        for ($i=0; $i<$z; $i++) {
            $y = substr($nit, $i, 1);
            $x += ($y*$arr[$z-$i]);
        }
       
        $y = $x%11;
       
        if ($y > 1) {
            $dv = 11-$y;
            return $dv;
        } else {
            $dv = $y;
            return $dv;
        }  
    }
    
    // Genera posición de banner
    function vistaBanner($val){
	    $sql="SELECT * FROM banners WHERE posicion = '".$val."' AND status = 1 ORDER BY orden";
	    $q=mysql_query($sql);
	    while($data=mysql_fetch_assoc($q)){
		    
		    $width="680";
		    $height="90";
		    
		    if($data['formato']==1){
			    $width="680";
			    $height="90";
		    }elseif($data['formato']==2){
			    $width="300";
			    $height="250";
		    }elseif($data['formato']==3){
			    $width="468";
			    $height="60";
		    }else{
			    $width="680";
			    $height="90";
		    }
		    
		    $ext = pathinfo($data['archivo'], PATHINFO_EXTENSION);
		    if($ext=='swf'){
			    ?>
			    		<div class="banner">
						<div class="banner-block">
					    		<object class="banner-flash" width="<?php echo $width; ?>" height="<?php echo $height; ?>" border="0" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
								<param value="admin/_lib/file/docbanners/<?php echo $data['archivo'] ?>" name="movie">
								<embed width="<?php echo $width; ?>" height="<?php echo $height; ?>" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/get/flashplayer" loop="false" src="/admin/_lib/file/docbanners/<?php echo $data['archivo'] ?>">
							</object>
						</div>
						<div class="banner-info">
							<a href="<?php echo $banner_3['enlace'] ?>" class="sponsored">&nbsp;&nbsp;</a>
						</div>
					</div>
			    <?php
		    }else{
			    ?>
			    		<div class="banner">
						<div class="banner-block">
							<a href="<?php echo $data['enlace'] ?>" target="_blank"><img src="/admin/_lib/file/docbanners/<?php echo $data['archivo'] ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="" /></a>
						</div>
						<div class="banner-info">
							<a href="<?php echo $data['enlace'] ?>" class="sponsored">&nbsp;</span>&nbsp;&nbsp;</a>
						</div>
					</div>
			    <?php
		    }
	    }
    }
    
    // Trae los precios de los productos
    function getPrice($val){
	    $sql="SELECT precio FROM precios WHERE id = '".$val."'";
	    $q=mysql_query($sql);
	    $data=mysql_fetch_array($q);
	    return $data['precio'];
    }
    
    // Vista de articulo de boletin
    function getArticuloBoletin($val){
	    $sql="SELECT * FROM articulos WHERE idArticulo = '$val'";
	    $q=mysql_query($sql);
	    $articulo=mysql_fetch_array($q);
	    return "<a href='/articulo/$articulo[idArticulo]'>".$articulo['titulo']."</a>";
    }
	
?>