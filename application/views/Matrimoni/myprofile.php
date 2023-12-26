<?php
$this->load->view('Matrimoni/layouts/header');
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
	<div class="col-md-8 login-form-w3-agile" style="height: 490px;width: 1100px">
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
					<input type="text" name="name" value="<?php echo $fetch->Name?>" placeholder="Email" required="">
				</div><br>
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Email</span>
					<input readonly type="email" name="Email" value="<?php echo $fetch->Mat_email?>" placeholder="Email" required="">
				</div><br>
				<div class="w3_form_body_grid">
					<span  style="font-size: 16px">Password</span>
					<input type="text" name="Password"value="<?php echo $fetch->Password?>" placeholder="Password" required="">
				</div><br><br>
				
				<input type="submit" value="Update">
			</form><br><br>
			<div align="center">

			
			</div>
			
		</div>
		
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
$this->load->view('Matrimoni/layouts/footer');
?>