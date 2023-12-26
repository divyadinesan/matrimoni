<?php
$this->load->view('Admin/layouts/header');
?>










<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}


tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<div class="panel-heading">
    User Details
    </div>
<br>
<div class="table-agile-info">
 <div class="panel panel-default">

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
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Height</th>
            <th>Address</th>
            <th>Contact number</th>
            <th>Qualification</th>
            <th>Job</th>
            <th>Family members</th>
            <th>Email</th>
            <th>Password</th>
            <th data-breakpoints="xs">Image</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
             foreach($use as $row)
             {
          ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
            <td><?php echo $row->user_Name?></td>
            <td><?php echo $row->user_Age?></td>
            <td><?php echo $row->user_Gender?></td>
            <td><?php echo $row->user_Height?></td>
            <td><?php echo $row->user_Address?></td>
            <td><?php echo $row->user_Number?></td>
            <td><?php echo $row->user_Qualification?></td>
            <td><?php echo $row->user_Job?></td>
            <td><?php echo $row->user_Family?></td>
            <td><?php echo $row->Email?></td>
            <td><?php echo $row->Password?></td>

            <td><img src="<?php echo base_url('Assets/User/coustomer/'.$row->Pic)?>" style="height:50px;width:50px"></td>

          </tr>
         <?php
         $i++;
     }
     ?>
        </tbody>
   
  </table>
  
</div>

</body>
</html>





<?php
$this->load->view('Admin/layouts/footer');
?>
