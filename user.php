<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    
    //variable declaration
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $email=$_POST['email_address'];

    $sql="INSERT INTO user(first_name,last_name,email) VALUES('$first_name','$last_name','$email')";

    $result=mysqli_query($con,$sql);

    if ($result) {
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<title>Registration</title>

    

</head>
<body>
     
     <div class="container my-5">
         <h3 class="text-black-50">Member Registration</h3>
         <form action="" method="post">

             <div class="form-group my-3">
                 <label>First Name</label>
                 <input class="form-control w-50 shadow-none" type="text" name="fname" placeholder="First Name" required="required" autocomplete="off">
             </div>

             <div class="form-group my-3">
                 <label>Last Name</label>
                 <input class="form-control w-50 shadow-none" type="text" name="lname" placeholder="Last Name" required="required" autocomplete="off">
             </div>

             <div class="form-group my-3">
                 <label>Email</label>
                 <input class="form-control w-50 shadow-none" type="email" name="email_address" placeholder="Email" required="required" autocomplete="off">
             </div>

             <div class="form-group">
                 <button class="btn btn-primary shadow-none" name="submit">Register</button>
             </div>

         </form>
     </div>

</body>
</html>