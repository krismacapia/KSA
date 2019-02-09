<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  	<head>
      	<meta charset="utf-8" />
     	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo/coffee1.png">
      	<link rel="icon" type="image/jpeg" href="assets/img/logo/coffee1.png">
      	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        <title>CoffeeHOUSE</title>

      	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      	<!--     Fonts and icons     -->
      	<link href="https://fonts.googleapis.com/css?family=Montserrat|Kaushan+Script|Major+Mono+Display" rel="stylesheet">
      	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      	<!-- CSS Files -->
      	<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
      	<link href="./assets/css/now-ui-kit.css" rel="stylesheet" />
      
  	</head>

  	<body data-spy="scroll" data-target=".navbar" data-offset="50">
  		<div class="section section-home" style="background-image: url('assets/img/bg/menu.jpg');">

  		</div>

      	<!-- Navbar -->
      	<?php require 'navbar.php';?>
      	<!-- End Navbar -->
 		<div class="section section-head" style="background-image: url('assets/img/bg/menu.jpg');">
    	<!--   HEADER :) -->
      	<div class="header" style="background-image: url('assets/img/bg/header.gif');">
          	<div class="text-block"> 
	            <h1>Roasting Coffee,<br>Brewing Harmony</h1 >
	            <h6>Don't let anyone tells you that fairy tales aren't real.<br>I drink a potion made from "MAGIC BEANS" <br>and it brings me back to life.</h6><br>
	            <a href="javascript:void(0)" class="btn btn-primary p-3 px-xl-4 py-xl-3" onclick="scrollToBooknow()">BOOK NOW</a>
	            <a href="javascript:void(0)" class="btn btn-primary btn-simple p-3 px-xl-4 py-xl-3" href="javascript:void(0)" onclick="scrollToMenu()">VIEW MENU</a>   
          	</div>
      	</div>
     
  		<!-- COUNT -->
		<div class="section section-count" style="background-image: url('assets/img/bg/1.jpg');">
			<div class="row">
				<div class="col-sm-2 text-justify"><br>
	            </div>
				<div class="col-sm-2 text-center">				
					<h1 class="num" data-stop="30">30</h1>
					<h6>YEARS</h6><hr>		
				</div>
				<div class="col-sm-2 text-center"> 
					<h1 class="num" data-stop="150">100</h1>
					<h6>AWARDS</h6><hr>
				</div>
				<div class="col-sm-2 text-center"> 						
					<h1 class="num" data-stop="300">200</h1>
					<h6>EMPLOYEES</h6><hr>
				</div>
				<div class="col-sm-2 text-center"> 					
					<h1 class="num"  data-stop="10893">10893</h1>
					<h6>HAPPY CUSTOMERS</h6><hr>
				</div>		
			</div>
		</div>
 		
    	<!-- ABOUT :) -->
    	<div class="section section-about" style="background-image: url('assets/img/bg/gallery.jpeg');">
          	<div class="container text-center">
	            <div class="col-md-8">
	              	<h3 class="subtitle">Life is like a Coffee</h3>
	                <h2 class="title">OUR STORY</h2>
	                <br>
	                <div id="story-content">
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia.</p>
						<img src="assets/img/bg/story.jpeg">
					</div>
            	</div>
          	</div>
        </div>
        
        <!-- GALLERY :) -->
		<?php require 'gallery.php';?>
	    <!-- MENU :) -->       
	    <?php require 'menu.php';?>

	    <!-- MENU :) -->       
	    <?php require 'booknow.php';?>
   		</div>
    	<!-- FOOTER :) -->
        <?php require 'footer.php';?>
     	
    
	    <!-- BACK TO TOP BUTTON -->
	    <button onclick="topFunction()" id="myBtn"><i class="far fa-arrow-alt-circle-up"></i></button>

		<script>

			// BOOK A TABLE MODAL FORM
			$(".myBtnBook").click(function(){
		   		 $("#myModal").modal();
		 	});
			
			// FOR SECTION-COUNT
			$('.num').each(function () {
				  var $this = $(this);
				  jQuery({ Counter: 0 }).animate({ Counter: $this.attr('data-stop') }, {
				    duration: 10000,
				    easing: 'swing',
				    step: function (now) {
				      $this.text(Math.ceil(now));
			    }
			  });
			});

			// FOR SECTION SCROLL
			function scrollToHome() {

		      if ($('.section-home').length != 0) {
		        $("html, body").animate({
		          scrollTop: $('.section-home').offset().top
		        }, 1000);
		      }
		    }

		    function scrollToAbout() {

		      if ($('.section-about').length != 0) {
		        $("html, body").animate({
		          scrollTop: $('.section-about').offset().top
		        }, 1000);
		      }
		    }
		    function scrollToGallery() {

		      if ($('.section-gallery').length != 0) {
		        $("html, body").animate({
		          scrollTop: $('.section-gallery').offset().top
		        }, 1000);
		      }
		    }
		    function scrollToMenu() {

		      if ($('.section-menu').length != 0) {
		        $("html, body").animate({
		          scrollTop: $('.section-menu').offset().top
		        }, 1000);
		      }
		    }
		     function scrollToBooknow() {

		      if ($('.section-booknow').length != 0) {
		        $("html, body").animate({
		          scrollTop: $('.section-booknow').offset().top
		        }, 1000);
		      }
		    }	     

			// FOR BTN BACK-TO-TOP
		    // When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			    document.getElementById("myBtn").style.display = "block";
			  } else {
			    document.getElementById("myBtn").style.display = "none";
			  }
			}
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  if ($('.header').length != 0) {
		        $("html, body").animate({
		          scrollTop: $('.section').offset().top
		        }, 1000);
		      }
	  		}
	  	
			// FOR SOCIAL MEDIA TOOLTIP		         
			$(document).ready(function(){
			  $('[data-toggle="tooltip"]').tooltip();   
			});
		</script>
				
	</body>
</html>


