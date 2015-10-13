<?php
    
    // Obtener Link de la categoría
    function getCategoryLink($val){
    	global $con;
    	$sql="SELECT link_cat FROM categorias_servicios WHERE id='$val'";
    	$q=mysqli_query($con, $sql);
    	$link=mysqli_fetch_array($q);
    	return $link['link_cat'];
    }
    
    // Obtener nombre de la categoría
    function getCategoryName($val){
    	global $con;
    	$sql="SELECT nombre FROM categorias_servicios WHERE id='$val'";
    	$q=mysqli_query($con, $sql);
    	$categoria=mysqli_fetch_array($q);
    	return $categoria['nombre'];
    }
    
    // Obtener el nombre de la raza
    function getRazaName($val){
    	global $con;
    	$sql="SELECT nombre FROM razas WHERE id = '$val'";
    	$q=mysqli_query($con, $sql);
    	$raza=mysqli_fetch_array($q);
    	return $raza['nombre'];
    }
    
    function getProductCategory($val){
    	global $con;
    	$sql="SELECT nombre FROM categorias_productos WHERE id = '$val'";
    	$q=mysqli_query($con, $sql);
    	$data=mysqli_fetch_array($q);
    	return $data['nombre'];
    }
    
    // Obtener nombre de la categoría PRUEBA
    function getCategoryName2($val){
    	global $con;
    	$sql="SELECT nombre FROM categorias WHERE id='$val'";
    	$q=mysqli_query($con, $sql);
    	$categoria=mysqli_fetch_array($q);
    	return $categoria['nombre'];
    }
    
    // Obtener menú de productos
    function getSerSaidbar(){
    	global $con;
    	$sql="SELECT servicios.categoria, categorias_servicios.nombre FROM servicios JOIN categorias_servicios ON servicios.categoria = categorias_servicios.id WHERE categorias_servicios.ox = 1 GROUP BY categoria";
    	$q=mysqli_query($con, $sql);
    	$n=mysqli_num_rows($q);
    	if($n>0){
    		while($categorias=mysqli_fetch_assoc($q)){
    			echo "<li><a href='index.php?content=servicios&cat=".getCategoryLink($categorias['categoria'])."'><i class='fa fa-magic'></i>".ucwords(mb_strtolower(getCategoryName($categorias['categoria']),'utf-8'))."</a>";
    			
    			$sql2="SELECT * FROM servicios WHERE categoria = '$categorias[categoria]' AND ox = 1";
    			$q2=mysqli_query($con, $sql2);
    			$n2=mysqli_num_rows($q2);
    			
    			if($n2>0){
    				echo "<ul class='sub-menu' style='margin-left: 20px;'>";
    				while($servicios=mysqli_fetch_assoc($q2)){
    					echo "<li><a href='index.php?content=servicios&cat=$servicios[link_cat]&ser=$servicios[link_ser]'>".ucwords(mb_strtolower($servicios[nombre],'utf-8'))."</a></li>";
    				}
    				echo "</ul>";
    			}
    			
    			echo "</li>";
    		}
    	}
    }
    
    // Obtener menú de productos
    function getSerMenu(){
    	global $con;
    	$sql="SELECT servicios.categoria, categorias_servicios.nombre FROM servicios JOIN categorias_servicios ON servicios.categoria = categorias_servicios.id WHERE categorias_servicios.ox = 1 GROUP BY categoria";
    	$q=mysqli_query($con, $sql);
    	$n=mysqli_num_rows($q);
    	if($n>0){
    		while($categorias=mysqli_fetch_assoc($q)){
    			echo "<li><a href='index.php?content=servicios&cat=".getCategoryLink($categorias['categoria'])."'><i class='fa fa-magic'></i>".ucwords(mb_strtolower(getCategoryName($categorias['categoria']),'utf-8'))."</a>";
    			
    			$sql2="SELECT * FROM servicios WHERE categoria = '$categorias[categoria]' AND ox = 1";
    			$q2=mysqli_query($con, $sql2);
    			$n2=mysqli_num_rows($q2);
    			
    			if($n2>0){
    				echo "<ul class='sub-menu' style='margin-left: 20px;'>";
    				while($servicios=mysqli_fetch_assoc($q2)){
    					echo "<li><a href='index.php?content=servicios&cat=$servicios[link_cat]&ser=$servicios[link_ser]'>".ucwords(mb_strtolower($servicios[nombre],'utf-8'))."</a></li>";
    				}
    				echo "</ul>";
    			}
    			
    			echo "</li>";
    		}
    	}
    }
    
     // Obtener sidebar menú de servicios PRUEBA
	function getCategoryMenus(){
		global $con;
		$sql="SELECT categoria FROM categorias_servicios WHERE ox = 1 GROUP BY categoria";
		$q=mysqli_query($con, $sql);
		$n=mysqli_num_rows($q);
		if($n>0){
			while($categorias=mysqli_fetch_assoc($q)){
				echo "<li><a href='index.php?content=servicios&cat=$categorias[link_cat]'><i class='fa fa-columns'></i>".getCategoryName($categorias['categoria'])."</a>";
				$sql2="SELECT servicios.categoria, categorias_servicios.categoria FROM servicios JOIN categorias_servicios ON servicios.categoria = categorias_servicios.id WHERE categoria = '$categorias[categoria]' GROUP BY categoria";
				$q2=mysqli_query($con, $sql2);
				$n2=mysqli_num_rows($q2);
				if($n2>0){
					echo "<ul class='sub-menu' style='margin-left: 20px;'>";
					while($servicios=mysqli_fetch_assoc($q2)){
						echo "<li><a href='index.php?content=servicios&cat=$servicios[link_cat]&ser=$servicios[link_ser]'>$servicios[nombre]</a></li>";
					}
					echo "</ul>";
				}
				echo "</li>";
			}
		}
	}
    
    
    
    
    // Obtener menú de animales Prueba
    function getCategoryMenus2(){
    	global $con;
    	$sql="SELECT categoria FROM categorias_servicios WHERE ox = 1 GROUP BY categoria";
    	$q=mysqli_query($con, $sql);
    	$n=mysqli_num_rows($q);
    	if($n>0){
    		while($categorias=mysqli_fetch_assoc($q)){
    			echo "<li><a href='#'><i class='fa fa-columns'></i>".getCategoryName2($categorias['categoria'])."</a>";
    			$sql2="SELECT servicios.categoria,categorias_servicios.nombre FROM servicios JOIN categorias_servicios ON servicios.categoria = categorias_servicios.id WHERE categorias_servicios.ox = 1 GROUP BY categoria";
    			$q2=mysqli_query($con, $sql2);
    			$n2=mysqli_num_rows($q2);
    			if($n2>0){
    				echo "<ul class='sub-menu' style='margin-left: 20px;'>";
    				while($servicios=mysqli_fetch_assoc($q2)){
    					echo "<li><a href='#'>$servicios[nombre]</a></li>";
    				}
    				echo "</ul>";
    			}
    			echo "</li>";
    		}
    	}
    }
    
   
    
    // Obtener menú de animales Antiguo
    function getCategoryMenuds(){
    	global $con;
    	$sql="SELECT categoria FROM razas WHERE status = 1 GROUP BY categoria";
    	$q=mysqli_query($con, $sql);
    	$n=mysqli_num_rows($q);
    	if($n>0){
    		while($categorias=mysqli_fetch_assoc($q)){
    			echo "<li><a href='#'>".getCategoryName($categorias['categoria'])."</a>";
    			$sql2="SELECT toros.raza,razas.nombre,razas.categoria FROM toros JOIN razas ON toros.raza=razas.id WHERE categoria='$categorias[categoria]' GROUP BY raza";
    			$q2=mysqli_query($con, $sql2);
    			$n2=mysqli_num_rows($q2);
    			if($n2>0){
    				echo "<ul>";
    				while($razas=mysqli_fetch_assoc($q2)){
    					echo "<li><a href='/?content=razas&id=$razas[raza]'>$razas[nombre]</a></li>";
    				}
    				echo "</ul>";
    			}
    			echo "</li>";
    		}
    	}
    }
    
    // Obtener menú de productos ANTIGUO
    function getProductMenu(){
    	global $con;
    	$sql="SELECT productos.categoria, categorias_productos.nombre FROM productos JOIN categorias_productos ON productos.categoria = categorias_productos.id WHERE categorias_productos.status = 1 GROUP BY categoria";
    	$q=mysqli_query($con, $sql);
    	$n=mysqli_num_rows($q);
    	if($n>0){
    		while($categorias=mysqli_fetch_assoc($q)){
    			echo "<li><a href='#'>$categorias[nombre]</a>";
    			
    			$sql2="SELECT * FROM productos WHERE categoria = '$categorias[categoria]' AND status = 1";
    			$q2=mysqli_query($con, $sql2);
    			$n2=mysqli_num_rows($q2);
    			
    			if($n2>0){
    				echo "<ul>";
    				while($productos=mysqli_fetch_assoc($q2)){
    					echo "<li><a href='/index.php?content=productos&id=$productos[id]'>$productos[nombre]</a></li>";
    				}
    				echo "</ul>";
    			}
    			
    			echo "</li>";
    		}
    	}
    }
    
    
    
    
    ?>