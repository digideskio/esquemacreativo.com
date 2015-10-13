

<style type="text/css">
    /* Custom Styles */
    
    
    @media only screen and (min-width: 980px) and (max-width: 1920px) {
	    .affix {
		    Left: 933px; 
		    top: 94px;
		    }
		    .affix .sidebar {
    width: 262px;
    }
    .ok {
		    display: block;
	    }
	    
	    .nok {
		    display: none;
	    }
    }
    @media only screen and (min-width: 768px) and (max-width: 979px) {
	    .affix {
		    Left: 525px; 
		    top: 94px;
		    }
		    .affix .sidebar {
			width: 220px;
    		}
    .ok {
		    display: block;
	    }
	    
	    .nok {
		    display: none;
	    }
	    
    }
@media only screen and (min-width: 240px) and (max-width: 767px) {
	    .nok {
		    display: block;
	    }
	    .affix .sidebar {
			display: none;
    		}
	    
	    
    }
    
	    
    .widget_nav_menu .menu li.active ul.sub-menu li a {
	    color: #7d7d7d !important;
    }
    .widget_nav_menu .menu li.active ul.sub-menu li a:hover {
	    color: #8d84e4 !important;
    }
    .navbar-default .menu > .active > a, .navbar-default .menu > .active > a:hover, .navbar-default .menu > .active > a:focus {
    background-color: inherit !important;
    color: #8d84e4;
    
	}
	.widget_nav_menu .menu li.active ul.sub-menu li.active a {
	    color: #8d84e4 !important;
    }
    
    .navbar-nav > li {
    float: none;
	}
    
    
    
    .navbar-default {
    background-color: inherit;
    border: none;
    }
    .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
    }
    
    
</style>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ok" data-spy="affix" data-offset-top="190" data-offset-bottom="800" style="overflow-y: auto;">
    <button class="btn btn-success btn-lg btn-radius" data-target="#myModalLeads" data-toggle="modal">¡Necesito un Sitio para Móviles!</button>
    <div class="sidebar">
       <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <span class="visible-xs navbar-brand">Nuestros Servicios</span>
            </div>
            <div class="navbar-collapse collapse sidebar-navbar-collapse" style="overflow-y: auto;">
                <div class="text-block widget" style="margin-bottom: 20px;">
                    <div class="text-heading line">
                        <h3><i class="fa fa-users"></i> Nuestros Servicios</h3>
                    </div>
                </div>
                <section class="widget widget_nav_menu clearfix" style="margin-left: 20px;">
                    <ul class="menu nav navbar-nav" id="sidenav01">
                        <?php getSerSaidbar(); ?>
                    </ul>
                </section>
            </div>
            <!--end:Sidebar-->
        </div>
        <!--end:colright--> 
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 nok">
    <div class="sidebar">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <span class="visible-xs navbar-brand">Nuestros Servicios</span>
            </div>
            <div class="navbar-collapse collapse sidebar-navbar-collapse">
                <div class="text-block widget" style="margin-bottom: 20px;">
                    <div class="text-heading line">
                        <h3><i class="fa fa-users"></i> Nuestros Servicios</h3>
                    </div>
                </div>
                <section class="widget widget_nav_menu clearfix" style="margin-left: 20px;">
                    <ul class="menu nav navbar-nav" id="sidenav01">
                        <?php getSerSaidbarResponsive(); ?>
                    </ul>
               	</section>
            </div>
            <!--end:Sidebar-->
        </div>
        <!--end:colright--> 
    </div>
</div>

