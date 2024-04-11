<?php
$this->load->view('Admin/layouts/header');
?>


<div class="table-agile-info">
 <div class="panel panel-default">

   <div class="panel-heading" style="overflow-x:auto;">
     Matrimoni Verification
    </div>
    <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Matrimoni name</th>
            <th>Address</th>
            <th>Country</th>
            <th>Contact number</th>
            <th>Email</th>
            <th>Password</th>
            <th data-breakpoints="xs">Experience</th>
           
            
              <th data-breakpoints="xs">Image</th>
              <th>Matrimoni type</th>
            
            <th>Approve</th>
            <th data-breakpoints="xs">Reject</th>
          </tr>
        </thead>
        <tbody>
        	<?php
        	$i=1;
             foreach($ver as $row)
             {
        	?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $row->Name?></td>
            <td><?php echo $row->Address?></td>
            <td><?php echo $row->Country?></td>
            <td><?php echo $row->Number?></td>
            <td><?php echo $row->Mat_email?></td>
            <td><?php echo $row->Password?></td>
            <td><?php echo $row->experience?></td>
            <td><img style="width:50px;height:50px"src="<?php echo base_url('Assets/Matrimoni/product/'.$row->image)?>"></td>
            <td><?php echo $row->martimoni_type?></td>
            
            <td><a href="<?php echo base_url('index.php/Admin_controller/approvemat/'.$row->matrimoni_id)?>"><img style="width:50px;height:50px"src=<?php echo base_url('Assets/Admin/images/Approve.jpg')?>></a></td>
            <td><a href="<?php echo base_url('index.php/Admin_controller/rejectmat/'.$row->matrimoni_id)?>"><img style="width:50px;height:50px"src=<?php echo base_url('Assets/Admin/images/reject.jpg')?>></a></td>
          </tr>
         <?php
         $i++;
     }
     ?>
        </tbody>
      </table>
    </div>
</div>
</div>









<?php
$this->load->view('Admin/layouts/footer');
?>
