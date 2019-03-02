<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2>Employee Page Info</h2>
<div class="container">
<a href="insert.php" class="btn btn-primary">Add</a>
<?php
  	$mysqli = new mysqli('localhost', 'root', '', 'exam_db') or die(mysqli_error($mysqli));
	  $result = $mysqli->query("SELECT  address_one.address_one, employee.fname , employee.date_hired
	  FROM address_one
	  INNER JOIN employee
	  ON address_one.employee_id = employee.employee_id ") or die($mysqli->error);
	 
	 $results = $mysqli->query("SELECT  contact_one.contact_one, employee.bdate
	  FROM contact_one
	  INNER JOIN employee
	  ON contact_one.employee_id = employee.employee_id ") or die($mysqli->error);
	  
	  
	 

   ?>
   <div class="row justify-content-center">
   	<table class="table table-bordered">
   		<thead>
   			<tr>
   				<th>Name</th>
   				<th>Primary Address</th>
   				<th>Primary Contact Info</th>
   				<th>Age</th>
                <th># of Years in the Company</th>
   				<th colspan="2"></th>
   			</tr>
   		</thead>
		   <?php while ($rows = $results->fetch_assoc()):?>
		   <?php $dateOfBirth = $rows['bdate'];
				$today = date("Y-m-d");
				$diff = date_diff(date_create($dateOfBirth), date_create($today));?>
   		<?php while ($row = $result->fetch_assoc()):?>
		   <?php $dateOfBirth = $row['date_hired'];
				$today = date("Y-m-d");
				$difff = date_diff(date_create($dateOfBirth), date_create($today));?>
   		<tr>
   			<td><?php echo $row['fname']?></td>
   			<td><?php echo $row['address_one']?></td>
   			<td><?php echo $rows['contact_one']?></td>
   			<td><?php echo $diff->format('%y');?></td>
			<td><?php echo $difff->format('%y');?></td>
   			<td>
   				<a 
   					class ="btn btn-info">Edit</a>
   				<a 
   				   	class="btn btn-danger">Delete</a>
   			</td>
   		</tr>
   	<?php endwhile; ?>
	   <?php endwhile; ?>
   	</table>
   </div>
</div>

  

</body>
</html>
