<?php

include 'connection.php';

$id=$_GET['updateid'];

//filling the fields
$sql="SELECT* FROM user WHERE id=$id";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);

$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email_add=$row['email'];

if (isset($_POST['update'])) {
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email_address'];

    $sql="UPDATE user SET id=$id,first_name='$fname',last_name='$lname',email='$email' WHERE id=$id";

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
	<title>Member Details</title>

    

</head>
<body>
     
     <div class="container my-5">
         <h3 class="text-black-50">Member Details</h3>
         <form action="" method="post">

             <div class="form-group my-3">
                 <label>First Name</label>
                 <input class="form-control w-50 shadow-none" type="text" name="fname" placeholder="First Name" required="required" autocomplete="off" value="<?php echo "$first_name" ?>">
             </div>

             <div class="form-group my-3">
                 <label>Last Name</label>
                 <input class="form-control w-50 shadow-none" type="text" name="lname" placeholder="Last Name" required="required" autocomplete="off" value="<?php echo "$last_name" ?>">
             </div>

             <div class="form-group my-3">
                 <label>Email</label>
                 <input class="form-control w-50 shadow-none" type="email" name="email_address" placeholder="Email" required="required" autocomplete="off" value="<?php echo "$email_add" ?>">
             </div>

             <div class="form-group">
                 <button class="btn btn-primary shadow-none" name="update">Update</button>
             </div>

         </form>
     </div>

</body>
</html>