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
	<script src="http://static.esquemacreativo.com/js/vendor/bootstrap.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js" ></script>
	<script src="http://static.esquemacreativo.com/js/bootbox.js" ></script>
	
	<!-- JS Loader --> 
	<script type="text/javascript">
	$(document).ready(function(){
	$(".loader").fadeOut("slow");
	})
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
	