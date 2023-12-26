<?php
$this->load->view('User/layouts/header');
?>

<div class="matches elite-app">
	<div class="container">
	<div class="tittle-agileinfo">
		<h3>People Want to be Your Soulmate</h3><br>
	</div>
	<?php
	foreach ($req as $user)
	{
	
		
	
	?> 
	<div class="matches-main-agileinfo">
		<div class="col-md-6 "> 
			<img src="<?php echo base_url('Assets/User/coustomer/'.$user->sender_pic)?>">
			
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>:<?php echo $user->sender_name?></li>
				<li><span>Email</span>:<?php echo $user->sender_email?></li>
				<li><span>Status</span>:<?php echo $user->status?></li>
				
				<li><a href="<?php echo base_url('index.php/User_controller/fullprofile1/'.$user->sender_userid)?>">View full profile</a></li>
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