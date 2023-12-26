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
							<?php
	foreach ($matrimony as $row) 
	
	?>
							<a href="<?php echo base_url('index.php/User_controller/register/'.$row->matrimoni_id)?>">Create an Account</a>
						</div>
						<div class="clearfix"></div>
				</div>
</div>			
</div>

<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.html">Home</a><span>&#187;</span></li>
									
				<li>Matches</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="matches elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
		<h3>Find Your Soul Mates</h3><br>
	</div>
	<?php
	foreach ($user as $usr) {
	
	?>
	<div class="matches-main-agileinfo">
		<div class="col-md-6 "> 
			<img src="<?php echo base_url('Assets/User/coustomer/'.$usr->Pic)?>">
			
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>:<?php echo $usr->user_Name?></li>
				<li><span>Age / Height</span>:  <?php echo $usr->user_Age?>/ <?php echo $usr->user_Height?></li>
				<li><span>Qualification</span>: <?php echo $usr->user_Qualification?></li>
				<li><span>Profession</span>: <?php echo $usr->user_Job?></li>
				
				<li><a href="<?php echo base_url('index.php/User_controller/register/'.$usr->Matrimoni_id)?>">Express Interest</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		
	</div>
	<?php
}
?>
	
	
	
	</div>
</div>







<?php
$this->load->view('User/layouts/footer');
?>