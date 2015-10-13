<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
	</script>
	
<?php if($_SERVER['SERVER_NAME'] == 'localhost'){ ?>
	<!-- JS Plugins -->
	<script type="text/javascript" src="content/js/jquery-1.10.2.min.js"></script>
	<script src="http://static.esquemacreativo.com/js/vendor/bootstrap.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js" ></script>
	<script src="http://static.esquemacreativo.com/js/bootbox.js" ></script>
	
	<!-- JS Loader --> 
	<script type="text/javascript">
	$(document).ready(function(){
	$(".loader").fadeOut("slow");
	})
	</script>
	
	
	<!--Parallax-->
	<script type="text/javascript" src="content/js/stellar.js"></script>
	<!--Fancy Select-->
	<script type="text/javascript" src="content/js/fancySelect.js"></script>
	<!--jQuery Ui-->
	<script type="text/javascript" src="content/js/jquery-ui.js"></script>
	<!--Pretty Photo-->
	<script type="text/javascript" src="content/js/jquery.prettyPhoto.js"></script>
	<!--Header Sticky -->
	<script type="text/javascript" src="content/js/waypoints.min.js" ></script>
	<!--Mobile Menu -->    
	<script type="text/javascript" src="content/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="content/js/jquery.dlmenu.js"></script>
	<!--Owl Carousel-->
	<script type="text/javascript" src="content/js/owl.carousel.js"></script>
	<!--iSotope-->
	<script type="text/javascript" src="content/js/isotope.pkgd.min.js"></script>
	<!--Google Map-->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>   
	<!--Circle Chart-->
	<script type="text/javascript" src="content/js/jquery.circliful.min.js"></script>         
	<!--scrollReveal-->
	<script type="text/javascript" src="content/js/scrollReveal.js"></script>
	<!--Html5 player-->    
	<script type="text/javascript" src="content/js/mediaelement-and-player.min.js"></script>
	<!--Countdown--> 
	<script type="text/javascript" src="content/js/TimeCircles.js"></script>
	<!--Counter Up-->     
	<script type="text/javascript" src="content/js/jquery-counterup.js"></script> 
	<!-- Responsive video -->
	<script type="text/javascript" src="content/js/jquery.fitvids.js"></script>
	<!--Flat Surface Shader -->     
	<script type="text/javascript" src="content/js/fss.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="content/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="content/js/jquery.themepunch.revolution.min.js"></script>    
	<!--Onepage scroll-->     
	<script type="text/javascript" src="content/js/jQuery-scrollnav.js"></script>        
	<!--Background video-->     
	<script type="text/javascript" src="content/js/jquery.mb.YTPlayer.js"></script>             
	<!--Switch Style-->    
	<script src="content/js/styleswitch.js"></script>          
	<!--Retina support-->
	<script type="text/javascript" src="content/js/retina.js"></script>
	<!--Main Script-->
	<script type="text/javascript" src="content/js/main.js"></script> <!--Custom Script-->
	<script type="text/javascript">
	    $(document).ready(function(){
	    	$('#fade').list_ticker({
	    		speed:6000,
	    		effect:'fade'
	    	});
	    	$('#slide').list_ticker({
	    		speed:2000,
	    		effect:'slide'
	    	});		
	    })
	</script>
	<?php
	    $month = date('m');
	    if($month == 12){
	     echo '<script src="content/js/snowstorm-min.js"></script>';
	    }
	    ?>
	<script>
	    window.onload = function () {
	    
	    'use strict';
	    
	    var latlng = new google.maps.LatLng(4.709624045758756, -74.0990997481323);
	    var styles = [
	    
	    ];
	    
	    var myOptions = {
	    zoom: 17,
	    center: latlng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	    disableDefaultUI: true,
	    scrollwheel: false,
	    styles: styles
	    };
	    
	    var contentString = '<div id="content">' +
	    '<div id="siteNotice">' +
	    '</div>' +
	    '<h4>WIWUX</h4>' +
	    '<p>Hola estamos esperandote!' +
	    '</p>' +
	    '</div>';
	    
	    var infowindow = new google.maps.InfoWindow({
	    content: contentString
	    });
	    
	    var map = new google.maps.Map(document.getElementById('map'), myOptions);
	    
	    var myLatlng = new google.maps.LatLng(4.709624045758756, -74.0990997481323);
	    
	    var image = 'content/img/marker.png';
	    var marker = new google.maps.Marker({
	    position: myLatlng,
	    map: map,
	    title: 'Hello World!',
	    icon: image
	    });
	    
	    google.maps.event.addListener(marker, 'click', function () {
	    infowindow.open(map, marker);
	    });
	    
	    }
	</script>
	
	<!-- JS Custom Codes --> 
	<script src="http://static.esquemacreativo.com/js/cumains.js"></script>
<?php }else{ ?>
<!-- JS Loader --> 
	<script type="text/javascript">
		$(document).ready(function(){
		$(".loader").fadeOut("slow");
		})
	
		function downloadJSAtOnload(element, event, fn) {
			if (element.addEventListener) element.addEventListener(event, fn, false);
			else if (element.attachEvent) element.attachEvent("on" + event, fn);
			else element.onload = fn;
		}
	
		function getscript(src, callback) {
			var element,
			done,
			head,
			scripts,
			write;
	
			if (Array.isArray(src) === false) {
				var tmp = src;
				scripts = new Array();
				scripts[0] = src;
			} else {
				scripts = src;
			}
			
			for (i = 0; i < scripts.length; i++) {
			write = scripts[i].split("/");
			document.getElementById("loadingContent").innerHTML = "Cargando " + write[(write.length - 1)] + "... ";
	
			done = false;
			element = document.createElement("script");
			element.type = "text/javascript";
			element.async = "async";
			element.src = scripts[i];
			
				if (i == scripts.length - 1) {
					element.onload = element.onreadystatechange = function() {
						if (!done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
							done = true;
							if (callback !== undefined) {
								callback();
							}
						}
					};
				}
			//va esto
			head = document.getElementsByTagName("script")[0];
			head.parentNode.insertBefore(element, head);
			}
		}
	
		downloadJSAtOnload(window, "load", function() {
			getscript(
			"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js", 
			function() {
				getscript(
				new Array(
				"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"),
				function() {
					getscript("http://static.esquemacreativo.com/javascripts/min/allcumains.min.js")
				})
			});
		});
	</script>
	
<?php } ?>
	