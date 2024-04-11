<?php
$this->load->view('Matrimoni/layouts/header');
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
<br><br><br>
<div class="tittle-agileinfo">
				<h3>Payment Details</h3><br><br>
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
           
            
            <th>Card name</th>
            <th>Email</th>
            <th>Card no</th>
            <th>Amount</th>
            

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
           
            <td><?php echo $row->Card_name?></td>
            <td><?php echo $row->Email?></td>
            <td><?php echo $row->Card_no?></td>
            <td><?php echo $row->Amount?></td>
           

          

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
$this->load->view('Matrimoni/layouts/footer');
?>