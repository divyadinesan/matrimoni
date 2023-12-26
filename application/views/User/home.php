<?php
$this->load->view('User/layouts/header');
?>


<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="<?php echo base_url('index.php/User_controller/home')?>">Home</a><span>&#187;</span></li>
									
				
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
	foreach ($user as $loginuser) 
	foreach ($usr as $user)
	{
		if($user->user_Gender!=$loginuser->user_Gender)
		{
	
		
	
	?> 
	<div class="matches-main-agileinfo">
		<div class="col-md-6 "> 
			<img src="<?php echo base_url('Assets/User/coustomer/'.$user->Pic)?>" style="height: 250px;width: 300px">
			
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>:<?php echo $user->user_Name?></li>
				<li><span>Age / Height</span>:  <?php echo $user->user_Age?>/ <?php echo $user->user_Height?></li>
				<li><span>Qualification</span>: <?php echo $user->user_Qualification?></li>
				<li><span>Profession</span>: <?php echo $user->user_Job?></li>
				
				<li><a href="<?php echo base_url('index.php/User_controller/fullprofile/'.$user->user_id)?>">Express Interest</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		
	</div>
	<?php
}
}
?>
	
	
	
	</div>
</div>








<?php
$this->load->view('User/layouts/footer');
?>