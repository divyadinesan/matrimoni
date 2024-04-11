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
	<div class="matches-main-agileinfo">
		<div class="col-md-6"> 
			<img src="<?php echo base_url('Assets/User/coustomer/'.$full->Pic)?>">
		</div>
	  <div class="col-md-6 person-info-agileits-w3layouts">
			<ul>
				<li><span>Name</span>:<?php echo $full->user_Name?></li>
				<li><span>Age / Height</span>:<?php echo $full->user_Age?>/<?php echo $full->user_Height?></li>
				<li><span>Religion</span>:<?php echo $full->user_religion?></li>
				<li><span>Caste</span>:<?php echo $full->user_caste?></li>
				<li><span>Address</span>:<?php echo $full->user_Address?></li>
				<li><span>Email</span>:<?php echo $full->Email?></li>
		<?php
foreach ($user as $usr) 
?>		
	<?php
		if($usr->payment=='Pending' and $usr->Email==$this->session->userdata('Email'))
		{
	?>
		<li>
		<a href="<?php echo base_url('index.php/User_controller/package')?>">Pay Now</a></li>


	<?php
		}
		else
		{
	?>

	<a href="<?php echo base_url('index.php/User_controller/accept_request/'. $full->user_id)?>">
	<button style="width: 500px;color: white;background-color:green;border-radius:10px">Accept Request</button>

		</a>
	<br><br>
	<a href="<?php echo base_url('index.php/User_controller/reject_request/'.$full->user_id)?>">
	<button style="width: 500px;color: white;background-color:red;border-radius:10px">Reject Request</button>

		</a>
	
	<?php
		}
	?>
				
			</ul>
		</div>
		<div class="clearfix"> </div>
		
	</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<h3>Education, Basics & Lifestyle</h3>
			<ul>
				<li><span>Education</span>:<?php echo $full->user_Qualification?></li>
				<li><span>Profession</span>:<?php echo $full->user_Job?></li>
				<li><span>Mother Tongue</span>:<?php echo $full->mothertongue?></li>
				<li><span>Blood Group</span>:<?php echo $full->blood_group?></li>
				<li><span>Weight</span>:<?php echo $full->weight?></li>
				<li><span>Diet</span>:<?php echo $full->diet?></li>

			</ul>
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<h3>Family Details</h3>
			<ul>
				<li><span>Fathers Name</span>:<?php echo $full->father_name?></li>
				<li><span>Fathers Occupation</span>: <?php echo $full->father_job?></li>
				<li><span>Mothers Name</span>:<?php echo $full->mother_name?></li>
				<li><span>Mothers Occupation</span>:<?php echo $full->mother_job?></li>
				<li><span>No. Of Brothers</span>:<?php echo $full->no_of_brothers?></li>
				<li><span>No. Of Sisters</span>:<?php echo $full->no_of_sisters?></li>
			</ul>
		</div>
		<div class="col-md-6 person-info-agileits-w3layouts">
			<h3>What She Is Looking For</h3>
			<ul>
				<li><span>Age</span>:<?php echo $full->spouse_age?></li>
				<li><span>Height</span>:<?php echo $full->spouse_height?></li>
				<li><span>Religion</span>:<?php echo $full->spouse_religion?></li>
				<li><span>Caste</span>:<?php echo $full->spouse_caste?></li>
				<li><span>Education</span>:<?php echo $full->spouse_education?></li>
				
			</ul>
		</div>
	</div>
</div>



























<?php
$this->load->view('User/layouts/footer');
?>