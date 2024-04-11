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
							<!-- <a href="<?php echo base_url('index.php/User_controller/register')?>">Register</a> -->
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
									
				<li>Register</li>
				</ul>
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>Register Here</h3><br><br>
			</div>

	<div class="col-md-8 login-form-w3-agile" style="height: 2000px;width: 1000px">
		<br><br>
			

<form enctype="multipart/form-data" action="<?php echo base_url('index.php/User_controller/registration')?>" method="post">
				<?php
	foreach ($matrimoni as $fetch) 
	?>
				<input type="hidden" name="matrimoni_id" value="<?php echo $fetch->matrimoni_id?>">
				<div class="w3_form_body_grid">
					<span>Name</span>
					<input type="text" name="name" placeholder="Name" required="">
				</div>

				<div class="w3_form_body_grid">
					<span>Age</span>
					<input type="text" name="age" placeholder="Age" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Gender</span>
					<input type="text" name="gender" placeholder="Gender" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Height</span>
					<input type="text" name="height" placeholder="Height" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Weight</span>
					<input type="text" name="weight" placeholder="Weight" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Religion</span>
					<input type="text" name="religion" placeholder="Religion" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Caste</span>
					<input type="text" name="caste" placeholder="Caste" required="">
				</div>

				<div class="w3_form_body_grid">
					<span>Address</span>
					<input type="text" name="address" placeholder="Address" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Contact Number</span>
					<input type="text" name="num" placeholder="Contact number" required="">
				</div>
			   <div class="w3_form_body_grid">
					<span>Qualification</span>
					<input type="text" name="quali" placeholder="Qualification" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Job</span>
					<input type="text" name="job" placeholder="Job" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Family Members</span>
					<input type="text" name="fam" placeholder="Family Members" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Email</span>
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Password</span>
					<input type="password" name="password" placeholder="Password" required="">
				</div>
				 
				<div class="w3_form_body_grid">
					<span>Mother tongue</span>
					<input type="text" name="tongue" placeholder="Mother tongue" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Blood group</span>
					<input type="text" name="blood" placeholder="Blood group" required="">
				</div>

				<div class="w3_form_body_grid">
					<span>Diet</span>
					<input type="text" name="diet" placeholder="Diet" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Father's name</span>
					<input type="text" name="fname" placeholder="Father's name" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Father's job</span>
					<input type="text" name="fjob" placeholder="Fther's job" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Mother's name</span>
					<input type="text" name="mname" placeholder="Mother's name" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Mother's job</span>
					<input type="text" name="mjob" placeholder="Mother's job" required="">
				</div>
			   <div class="w3_form_body_grid">
					<span>No of brothers</span>
					<input type="text" name="nob" placeholder="No of brothers" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>No of sisters</span>
					<input type="text" name="nos" placeholder="No of sisters" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Spouse age</span>
					<input type="text" name="sage" placeholder="Spouse age" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Spouse height</span>
					<input type="text" name="sheight" placeholder="Spose height" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Spouse religion</span>
					<input type="text" name="sreligion" placeholder="Spouse religion" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Spouse caste</span>
					<input type="text" name="scaste" placeholder="Spouse caste" required="">
				</div>
				<div class="w3_form_body_grid">
					<span>Spouse education</span>
					<input type="text" name="sedu" placeholder="Spouse education" required="">
				</div>
				 <div class="w3_form_body_grid">
					<span>Photo</span>
					<input type="file" name="image" placeholder="Photo" required="">
				</div>


				
<br><br><br>
				<input type="submit" value="Sign Up">
			</form><br><br><br>
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
<br><br>


<?php
$this->load->view('User/layouts/footer');
?>













 

















