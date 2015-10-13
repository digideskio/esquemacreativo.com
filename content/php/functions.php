

<?php
// Obtener Link de la categoría
function getCategoryLink($val)
{
    global $con;
    $sql  = "SELECT link_cat FROM categorias_servicios WHERE id='$val'";
    $q    = mysqli_query($con, $sql);
    $link = mysqli_fetch_array($q);
    return $link['link_cat'];
}

// Obtener Link de la categoría
function getSerLink($val)
{
    global $con;
    $sql  = "SELECT link_ser FROM servicios WHERE id='$val'";
    $q    = mysqli_query($con, $sql);
    $link = mysqli_fetch_array($q);
    return $link['link_ser'];
}

// Obtener nombre de la categoría
function getCategoryName($val)
{
    global $con;
    $sql       = "SELECT nombre FROM categorias_servicios WHERE id='$val'";
    $q         = mysqli_query($con, $sql);
    $categoria = mysqli_fetch_array($q);
    return $categoria['nombre'];
}

// Obtener sidebar de productos
function getSerSaidbarResponsive()
{
    global $con;
    $sql = "SELECT servicios.categoria, categorias_servicios.nombre FROM servicios JOIN categorias_servicios ON servicios.categoria = categorias_servicios.id WHERE categorias_servicios.ox = 1 GROUP BY categoria";
    $q   = mysqli_query($con, $sql);
    $n   = mysqli_num_rows($q);
    if ($n > 0) {
        while ($categorias = mysqli_fetch_assoc($q)) {
            echo "<li ";
            if($_REQUEST['cat'] == getCategoryLink($categorias['categoria'])){
	                                        echo'class="active"';
                                        }
             echo "><a href='javascript:void(0)' data-toggle='collapse' data-target='#" . getCategoryLink($categorias['categoria']) . "' data-parent='#sidenav01' class='collapsed'><i class='fa fa-magic'></i>" . ucwords(mb_strtolower(getCategoryName($categorias['categoria']), 'utf-8')) . "<span class='caret pull-right'></span></a>";
            
            $sql2 = "SELECT * FROM servicios WHERE categoria = '$categorias[categoria]' AND ox = 1";
            $q2   = mysqli_query($con, $sql2);
            $n2   = mysqli_num_rows($q2);
            
            if ($n2 > 0) {
                echo "
                <div class='collapse' id='" . getCategoryLink($categorias['categoria']) . "' style='height: 0px;'>
                                    <ul style='margin-left: 20px;' class='sub-menu'>";
                while ($servicios = mysqli_fetch_assoc($q2)) {
                    echo "<li ";
                    if($_REQUEST['ser'] == $servicios['link_ser']){
	                                        echo'class="active"';
                                        }
                   echo "><a href='index.php?content=servicios&cat=$servicios[link_cat]&ser=$servicios[link_ser]'>" . ucwords(mb_strtolower($servicios['nombre'], 'utf-8')) . "</a></li>";
                }
                echo "</ul>
                </div>";
            }
            
            echo "</li>";
        }
    }
}


// Obtener sidebar de productos
function getSerSaidbar()
{
    global $con;
    $sql = "SELECT servicios.categoria, categorias_servicios.nombre FROM servicios JOIN categorias_servicios ON servicios.categoria = categorias_servicios.id WHERE categorias_servicios.ox = 1 GROUP BY categoria";
    $q   = mysqli_query($con, $sql);
    $n   = mysqli_num_rows($q);
    if ($n > 0) {
        while ($categorias = mysqli_fetch_assoc($q)) {
            echo "<li ";
            if($_REQUEST['cat'] == getCategoryLink($categorias['categoria'])){
	                                        echo'class="active"';
                                        }
             echo "><a href='index.php?content=servicios&cat=" . getCategoryLink($categorias['categoria']) . "'><i class='fa fa-magic'></i>" . ucwords(mb_strtolower(getCategoryName($categorias['categoria']), 'utf-8')) . "</a>";
            
            $sql2 = "SELECT * FROM servicios WHERE categoria = '$categorias[categoria]' AND ox = 1 AND link_cat = '$_REQUEST[cat]'";
            $q2   = mysqli_query($con, $sql2);
            $n2   = mysqli_num_rows($q2);
            
            if ($n2 > 0) {
                echo "<ul class='sub-menu' style='margin-left: 20px;'>";
                while ($servicios = mysqli_fetch_assoc($q2)) {
                    echo "<li ";
                    if($_REQUEST['ser'] == $servicios['link_ser']){
	                                        echo'class="active"';
                                        }
                    echo"><a href='index.php?content=servicios&cat=$servicios[link_cat]&ser=$servicios[link_ser]'>" . ucwords(mb_strtolower($servicios['nombre'], 'utf-8')) . "</a></li>";
                }
                echo "</ul>";
            }
            
            echo "</li>";
        }
    }
}

// Obtener menú de productos
function getSerMenu()
{
    global $con;
    $sql = "SELECT servicios.categoria, categorias_servicios.nombre FROM servicios JOIN categorias_servicios ON servicios.categoria = categorias_servicios.id WHERE categorias_servicios.ox = 1 GROUP BY categoria";
    $q   = mysqli_query($con, $sql);
    $n   = mysqli_num_rows($q);
    if ($n > 0) {
        echo '                <li class="mega-menu">
                        <a href="elements.html">Servicios</a>
                        <div class="inner">
                            <div class="row">
    ';
        
        
        
        while ($categorias = mysqli_fetch_assoc($q)) {
            echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <h3><a href="index.php?content=servicios&cat=' . getCategoryLink($categorias['categoria']) . '">' . ucwords(mb_strtolower(getCategoryName($categorias['categoria']), 'utf-8')) . '</a></h3>';
            
            
            
            $sql2 = "SELECT * FROM servicios WHERE categoria = '$categorias[categoria]' AND ox = 1";
            $q2   = mysqli_query($con, $sql2);
            $n2   = mysqli_num_rows($q2);
            
            if ($n2 > 0) {
                echo '<ul class="menu">';
                while ($servicios = mysqli_fetch_assoc($q2)) {
                    echo "<li><a href='index.php?content=servicios&cat=$servicios[link_cat]&ser=$servicios[link_ser]'><i class='fa fa-columns'></i>" . ucwords(mb_strtolower($servicios[nombre], 'utf-8')) . "</a></li>";
                }
                echo "</ul>
        				";
            }
             echo "
        				</div>";
            
        }
        echo " </div>
                            <!--end: row -->  
                        </div>
                        <!--end: inner -->
                    </li>";
    }
}

?>

