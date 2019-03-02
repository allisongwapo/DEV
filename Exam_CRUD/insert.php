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

<?php require_once 'action_page.php' ?>
		<?php 
		if (isset($_SESSION['message'])): ?>
		<div class="alert alert-<?=$_SESSION['msg_type']?>">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
<div class="container">

    <div class="row">
        <div class="col-sm-4">
            <form action="action_page.php" method="POST">
            </br>
            <button type="submit" class="btn btn-primary" value="submit" name="submit1">Save</button>
            <button type="submit1" class="btn btn-danger">Delete</button></br></br>
              
                    <label for="fname">First Name:</label>
                    <input type="fname" class="form-control" name="fname">
           
                
                    <label for="lname">Last Name:</label>
                    <input type="lname" class="form-control" name="lname">
           
                    <label for="mname">Middle Name:</label>
                    <input type="mname" class="form-control" name="mname">
               
                
                    <label for="bdate">Birth Date:</label>
                    <input type="date" class="form-control" name="bdate">
                
             
                    <label for="gender">Gender:</label>
                    <input type="gender" class="form-control" name="gender">
             
               
                    <label for="mstatus">Marital Status:</label>
                    <input type="mstatus" class="form-control" name="mstatus">
             
              
                    <label for="position">Position:</label>
                    <input type="position" class="form-control" name="position">
             
               
                    <label for="dhired">Date Hired:</label>
                    <input type="date" class="form-control" name="dhired">
            
                
                
         
        </div>
        <div class="col-sm-8">
   
                <div class="row justify-content-center">
                <h3>Contact Info:<button type="submit" class="btn btn-default">Add</button></h3>    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Value</th>
                                <th>Primary</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                            <input type="contact_one" class="form-control" name="contact_one"></br>
                            <input type="contact_two" class="form-control" name="contact_two"></br>
                            <input type="contact_three" class="form-control" name="contact_three"></br>
                            </td>
                            <td>
                            
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="row justify-content-center">
                <h3>Address Info:<button type="submit" class="btn btn-default">Add</button></h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Address 1</th>
                                <th>Address 2</th>
                                <th>Primary</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                            <input type="address_one" class="form-control" name="address_one"></br>
                            <input type="address_two" class="form-control" name="address_two"></br>
                            
                            </td>
                            <td>
                            <input type="address_one" class="form-control" name="address_three"></br>
                            <input type="address_one" class="form-control" name="address_four"></br>
                            
                            </td>
                        </tr>
                    </table>
                </div>
                </form>
                
        </div>
    </div>
</div>

  

</body>
</html>
