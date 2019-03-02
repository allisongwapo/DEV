<?php 
session_start();

$mysqli = new mysqli('localhost' ,  'root' , '' , 'exam_db') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = "admin";
    $user = "user";

    $result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
    
    if($username == $row['username'] && $password == $row['password'] && $username == $admin 
    && $password == $admin){
        header('location:admin.php');
    }elseif($username == $row['username'] && $password == $row['password'] && $username == $user 
    && $password == $user){
        header('location:user.php');
    }else{
        $_SESSION['message'] = "Incorrect Username and Pass";
        $_SESSION['msg_type'] = "danger";
    }

endwhile;
}
if(isset($_POST['submit1'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $mname =$_POST['mname'];
    $bdate =$_POST['bdate'];
    $gender =$_POST['gender'];
    $mstatus =$_POST['mstatus'];
    $position =$_POST['position'];
    $dhired =$_POST['dhired'];
    $c_one =$_POST['contact_one'];
    $c_two =$_POST['contact_two'];
    $c_three =$_POST['contact_three'];
    $a_one =$_POST['address_one'].", ".$_POST['address_two'];
    $a_two = $_POST['address_three'].", ".$_POST['address_four'];
    
    $query = "INSERT INTO employee(fname,lname,mname,bdate,gender,marital_status,position,date_hired) VALUES ('$fname', '$lname' , '$mname' , '$bdate' , '$gender' ,'$mstatus' , '$position', '$dhired')";
    $mysqli->query($query);
    $last_id = $mysqli->insert_id;

    $mysqli->query("INSERT INTO address_one(address_one,employee_id,flag) VALUES ('$a_one','$last_id',0)") or die($mysqli->error);
    $mysqli->query("INSERT INTO address_one(address_one,employee_id,flag) VALUES ('$a_two','$last_id',0)") or die($mysqli->error);
    $mysqli->query("INSERT INTO contact_one(contact_one,employee_id,flag) VALUES ('$c_one','$last_id',0)") or die($mysqli->error);
    $mysqli->query("INSERT INTO contact_one(contact_one,employee_id,flag) VALUES ('$c_two','$last_id',0)") or die($mysqli->error);
    $mysqli->query("INSERT INTO contact_one(contact_one,employee_id,flag) VALUES ('$c_three','$last_id',0)") or die($mysqli->error);



    $_SESSION['message'] = "Record has been Saved!";
	$_SESSION['msg_type'] = "success";

	header('location: insert.php');
    /*$query_three = "INSERT INTO address_one(address,employee_id) VALUES ('$a_two','$last_id')";
    $mysqli->query($query_three);*/
    



    /*$mysqli->query("INSERT INTO employee(fname,lname,mname,bdate,gender,marital_status,position,date_hired)
    VALUES ('$fname', '$lname' , '$mname' , '$bdate' , '$gender' ,'$mstatus' , '$position', '$dhired')")or die($mysqli->error);
    $mysqli->query("INSERT INTO address_one(address,employee_id) VALUES ('$a_one',LAST_INSERT_ID())")or die($mysqli->error);
    $mysqli->query("INSERT INTO address_one(address,employee_id) VALUES ('$a_two',LAST_INSERT_ID())")or die($mysqli->error);
    $mysqli->query("INSERT INTO contact_one(contact_one,employee_id) VALUES ('$c_one',LAST_INSERT_ID())")or die($mysqli->error);
    $mysqli->query("INSERT INTO contact_one(contact_two,employee_id) VALUES ('$c_two',LAST_INSERT_ID())")or die($mysqli->error);
    $mysqli->query("INSERT INTO contact_one(contact_three,employee_id) VALUES ('$c_three',LAST_INSERT_ID())")or die($mysqli->error);*/
   
   
}
?>