<?php
$this->load->view('Matrimoni/layouts/header');
?>
<div class="login elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
				<h3>Add Coustomer</h3><br><br>
			</div>

	<div class="col-md-8 login-form-w3-agile" style="height: 2100px;width: 1000px">
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
			</form><br>
			
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
<br>
<br>
<br>
<br>
<br>

<?php
$this->load->view('Matrimoni/layouts/footer');
?>

