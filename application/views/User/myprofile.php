<?php
$this->load->view('User/layouts/header');
?>




<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			
		</div>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="matches elite-app">
	<div class="container">
	<?php
	foreach($pro as $full)

	?>
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>My Profile</h3><br><br>
			</div>
	<div class="col-md-8 login-form-w3-agile" style="height: 500px;width: 1100px">
		<br><br>
			<form enctype="multipart/form-data" action="<?php echo base_url('index.php/User_controller/updatepro')?>" method="post">
				<div class="w3_form_body_grid">
					<?php
						foreach ($pro as $fetch) {
							
						?>
						
					
				</div><br><br>
				<div class="matches-main-agileinfo">
		
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Name</span>
					<input type="text" name="name" value="<?php echo $fetch->user_Name?>" placeholder="Email" required="">
				</div><br>
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Email</span>
					<input readonly type="email" name="Email" value="<?php echo $fetch->Email?>" placeholder="Email" required="">
				</div><br>
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Password</span>
					<input type="password" name="Password"value="<?php echo $fetch->Password?>" placeholder="Password" required="">
				</div><br><br>
				
				<input type="submit" value="Update">
			</form><br><br>
			<div align="center">

			<!-- <a href="<?php echo base_url('index.php/Indexcontroller/matrimoni')?>"><img src="<?php echo base_url('Assets/Matrimoni/images/home.png')?>" style="height: 50px;width: 50px"></a>
			</div> -->
			
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
	</div>
</div>






<?php
}
?>

<br>
<br>
<br>



<?php
$this->load->view('User/layouts/footer');
?>