<style >
   /* GLOBAL STYLES
   -------------------------------------------------- */
   /* CUSTOMIZE THE CAROUSEL
   -------------------------------------------------- */
   /* Carousel base class */
   .carousel {
   height: 700px;

   }
   /* Since positioning the image, we need to help out the caption */
   .carousel-caption {
   z-index: 10;
   }
   /* Declare heights because of positioning of img element */
   .carousel .item {
   height: 700px;
   }
   .carousel-inner > .item > img {
   position: absolute;
   top: 0;
   left: 0;
   min-width: 100%;
   height: 700px;
   }
   .carousel-caption {
    left: 15%;
    right: 15%;}
    
    .carousel-caption {
    text-shadow: inherit;
    }
   /* RESPONSIVE CSS
   -------------------------------------------------- */
   @media (min-width: 768px) {
   /* Navbar positioning foo */
   .navbar-wrapper {
   margin-top: 20px;
   }
   .navbar-wrapper .container {
   padding-right: 15px;
   padding-left: 15px;
   }
   .navbar-wrapper .navbar {
   padding-right: 0;
   padding-left: 0;
   }
   /* The navbar becomes detached from the top, so we round the corners */
   .navbar-wrapper .navbar {
   border-radius: 4px;
   }
   /* Bump up size of carousel content */
   .carousel-caption p {
   margin-bottom: 20px;
   font-size: 21px;
   line-height: 1.4;
   }
   .featurette-heading {
   font-size: 50px;
   }
   }
   @media (min-width: 992px) {
   .featurette-heading {
   margin-top: 120px;
   }
   }
</style>
<section class="h2-hero" style="background-color: #ececec;">
   <div class="fullwidthbanner-container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li class="" data-target="#myCarousel" data-slide-to="1"></li>
            <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	                     <img src="images/uno-ii.png"  />
                     </div>
                     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	                     <h1 style="font-weight: 200; font-size: 52px; padding-top: 120px;">Páginas WEB</h1>
	                     <h2 style="font-weight: 200; font-size: 30px; color: #111; position: inherit; padding-top: 30px;margin-bottom: 20px;">Diseño Flexible y Desarrollo UX</h2>
	                     <a href="#" style="font-weight: 200; font-size: 15px;">Qué es Diseño Flexible? ></a><a href="#" style="font-weight: 200; font-size: 15px; margin-left: 5px;"> Aprende más sobre Desarrollo UX ></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end:fullwidthbanner-container-->
</section>
