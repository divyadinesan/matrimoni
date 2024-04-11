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
	<div class="tittle-agileinfo">
		<h3>My  Matches</h3><br>
	</div>
	<?php
	foreach ($rec as $request) 
	
		{
	
		
	
	?> 
	<div class="matches-main-agileinfo">
		<div class="col-md-6 "> 
			<img src="<?php echo base_url('Assets/User/coustomer/'.$request->Pic)?>">
			
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>:<?php echo $request->user_Name?></li>
				<li><span>Age / Height</span>:  <?php echo $request->user_Age?>/ <?php echo $request->user_Height?></li>
				<li><span>Qualification</span>: <?php echo $request->user_Qualification?></li>
				<li><span>Profession</span>: <?php echo $request->user_Job?></li>
				<!-- <li><span>Request Status</span>: <?php echo $request->status?></li> -->
				
			</ul>
		</div>
		<div class="clearfix"> </div>
		
	</div>
	<?php
}

?>
	
	
	<?php
	foreach ($send as $snd) 
	
		{
	
		
	
	?> 
	<div class="matches-main-agileinfo">
		<div class="col-md-6 "> 
			<img src="<?php echo base_url('Assets/User/coustomer/'.$snd->Pic)?>">
			
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>:<?php echo $snd->user_Name?></li>
				<li><span>Age / Height</span>:  <?php echo $snd->user_Age?>/ <?php echo $snd->user_Height?></li>
				<li><span>Qualification</span>: <?php echo $snd->user_Qualification?></li>
				<li><span>Profession</span>: <?php echo $snd->user_Job?></li>
				<!-- <li><span>Request Status</span>: <?php echo $request->status?></li> -->
				
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