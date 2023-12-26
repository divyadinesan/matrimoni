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
<section class="w3ls-team text-center">
				<div class="container">
					<div class="tittle-agileinfo">
						<h3>Create An Account Here!!</h3>
					</div>
					<div class="team-row">
						<?php
						foreach ($matrimoni as $mtrny) {
							
						?>
						
						<a href="<?php echo base_url('index.php/User_controller/user/'.$mtrny->matrimoni_id)?>">
							<div class="col-md-5 w3ls-team-grids team-mdl">
							<p><b>Name :</b><br><?php echo $mtrny->Name?></p>
							<p><b>Email Id : </b><?php echo $mtrny->Mat_email?></p>
							<!-- <p>Experience : <?php echo $mtrny->experience?></p> -->
							<p><b>Phone Number : </b><?php echo $mtrny->Number?></p>
							
							<div class="team-img">
								<img src="<?php echo base_url('Assets/matrimoni/product/'.$mtrny->image)?>" alt="" style="height: 430px">
							</div>
						</div>
					</a>
						<?php
					}
					?>
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
				</section>

<?php
$this->load->view('User/layouts/footer');
?>
