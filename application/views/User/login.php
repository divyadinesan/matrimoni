<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Soul Match </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Match Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('Assets/Matrimoni/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('Assets/Matrimoni/css/font-awesome.css')?>" rel="stylesheet"> 
<link href="<?php echo base_url('Assets/Matrimoni/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="<?php echo base_url('Assets/Matrimoni///fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900')?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/Matrimoni///fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700')?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/Matrimoni///fonts.googleapis.com/css?family=Dancing+Script:400,700')?>" rel="stylesheet">
<!--//fonts-->

</head>
<body>
<!--banner start here-->
<div class="banner-w3ls inner-banner-agileits" id="home">
	<div class="container">
		<!-- header -->
                 <div class="header-inner">
					  <h1 class="logo">
						<a href="index.html">Soul<span>Match</span></a></h1>
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- navbar-header -->
							<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div> -->
							<div class="clearfix"> </div>	
						</nav>
						<div class="header-right-w3ls">
							<a href="<?php echo base_url('index.php/User_controller/login')?>">Log In</a>
							<a href="<?php echo base_url('index.php/User_controller/matrimony')?>">Register</a>
						</div>
						<div class="clearfix"></div>
				</div>
</div>			
</div>
<!--//home-->
<!--banner end here-->
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<!-- <li><a href="index.html">Home</a><span>&#187;</span></li> -->
									
				<li>Login</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>Login Now</h3><br><br>
			</div>
	<div class="col-md-8 login-form-w3-agile" style="height: 570px;width: 1100px">
		<br><br>
			<form action="<?php echo base_url('index.php/User_controller/signin')?>" method="post">
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Choose Matrimoni</span>
					<select name="matrimoni_id" style="width: 700px;height: 30px">
						<?php
						foreach ($matrimoni as $fetch) {
							
						?>
						<option value="<?php echo $fetch->matrimoni_id?>"><?php echo $fetch->Name?></option>
						<?php
					}
					?>

					</select>
				</div><br><br>
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Email</span>
					<input type="email" name="Email" placeholder="Email" required="">
				</div><br>
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Password</span>
					<input type="password" name="Password" placeholder="Password" required="">
				</div><br><br>
				
				<input type="submit" value="Sign In">
			</form><br><br>
			<div align="center">
			<a href="<?php echo base_url('index.php/Indexcontroller/matrimoni')?>"><img src="<?php echo base_url('Assets/Matrimoni/images/home.png')?>" style="height: 50px;width: 50px"></a>
			</div>
			
		</div>
		<!-- <div class="col-md-4 login-right-info">
			<h3 class="subhead-agileits">soulmate is the one who makes life come to life</h3><br>
			
			<ul>
				<li><i class="fa fa-check" aria-hidden="true"></i>You can totally be yourself</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>Respect each other's differences</li>
				<li><i class="fa fa-check" aria-hidden="true"></i>You’re there for each other</li>
				
			</ul><br>
			<h5>Don't have an account?<i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
			<div class="sim-button button12"><a href="<?php echo base_url('index.php/User_controller/register')?>">Register</a></div>
		</div> -->
	</div>
</div>
<!--login-inner-->
<!-- footer -->
<div class="w3l_footer">
		<div class="container">
				
				<!-- footer-button-info -->
				<div class="footer-middle-agileinfo">
					<div class="footer-button">
					<div class="button-top-w3layouts">
						<div class="logo-icons-w3ls">
							<i class="fa fa-heart heart1" aria-hidden="true"></i>
							<i class="fa fa-heart-o heart2" aria-hidden="true"></i>
						</div>
					</div>
						
						<h2>We’re Committed to Service Excellence.</h2>
					</div>
				</div>
				<!-- footer-button-info -->
		</div>
</div>


<div class="footer-w3layouts">
				<div class="container">
				<div class="agile-copy">
					<p>@2022 Soul Match | CodeIgniter Web Framework | <a href="https://atees.org/">ATEES Industrial Training Pvt Ltd</a></p>
				</div>
				<div class="agileits-social">
					
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
<!--/footer -->

<!-- js -->
<script type='text/javascript' src='<?php echo base_url('Assets/Matrimoni/js/jquery-2.2.3.min.js')?>'></script>



<script src="<?php echo base_url('Assets/Matrimoni/js/SmoothScroll.min.js')?>"></script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
	<!-- //for-Clients -->
	<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('Assets/Matrimoni/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/Matrimoni/js/easing.js')?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('Assets/Matrimoni/js/bootstrap-3.1.1.min.js')?>"></script>
	

</body>
</html>










 




