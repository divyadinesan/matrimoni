<!-- <?php
$this->load->view('User/layouts/header');
?>

<br><br><br><br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2 align="center">Match found</h2>
<br><br>
<div class="row">
	<?php
	foreach ($match as $mtch) {
		# code...
	
	?>
  <div class="column">
    <div class="card">
      <img src="<?php echo base_url('Assets/User/coustomer/'.$mtch->sender_pic)?>" style="height: 150px;width: 250px"><br><br>
 <p><?php echo $mtch->sender_email?></p><br><br>
       <img src="<?php echo base_url('Assets/User/coustomer/'.$mtch->recvr_pic)?>" style="height: 150px;width: 250px">
     
      <p><?php echo $mtch->receiver_email?></p>
      <br>
    </div><br><br>
  </div>
<?php
}
?>
  
  
  
</div>

</body>
</html>



<?php
$this->load->view('User/layouts/footer');
?>
 -->