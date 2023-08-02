<?php

include 'connection.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>

	<title>Front-end bootcamp</title>
</head>
<body>

  <div class="container my-3 p-3">
       
       <button class="btn btn-primary mb-3 shadow-none"><a class="text-light text-decoration-none" href="user.php">Add Member</a></button>
    
    <div class="table-responsive">
       <table class="table table-striped">
       	 <thead class="thead-dark">
       	 	<tr>
       	 		<!-- <th>S.No</th> -->
       	 		<th>First Name</th>
       	 		<th>Last Name</th>
       	 		<th>Email</th>
       	 		<th>Operations</th>
       	 	</tr>
       	 </thead>
       	 <tbody>

                     <?php
                      
                      $sql="SELECT* FROM user ORDER BY first_name ASC";

                      $result=mysqli_query($con,$sql);

                      while ($row=mysqli_fetch_assoc($result)) {
                            
                            $id=$row['id'];
                            $first_name=$row['first_name'];
                            $last_name=$row['last_name'];
                            $email=$row['email'];

                            echo "<tr>
                            <td>$first_name</td>
                            <td>$last_name</td>
                            <td>$email</td>
                            <td>
                                <button type='button' class='btn btn-primary btn-sm shadow-none'><a href='update.php?updateid=$id' class='text-light text-decoration-none'>Update</a></button>
                                <button type='button' class='btn btn-danger btn-sm shadow-none mx-2'><a href='delete.php?deleteid=$id' class='text-light text-decoration-none'>Delete</a></button>
                         </td>
                     </tr>";
                      }

                     ?>



       	 	<!-- <tr>
       	 		<td>1</td>
       	 		<td>Joseph</td>
       	 		<td>Kenga</td>
       	 		<td>jKenga331@gmail.com</td>
       	 		<td>
       	 			<button type="button" class="btn btn-primary btn-sm shadow-none">Update</button>
       	 		    <button type="button" class="btn btn-danger btn-sm shadow-none mx-2">Delete</button>
       	 	    </td>
       	 	</tr>

       	 	<tr>
       	 		<td>2</td>
       	 		<td>Margaret</td>
       	 		<td>Sidi</td>
       	 		<td>sidi@gmail.com</td>
       	 		<td>
       	 			<button type="button" class="btn btn-primary btn-sm shadow-none">Update</button>
       	 		    <button type="button" class="btn btn-danger btn-sm shadow-none mx-2">Delete</button>
       	 	    </td>
       	 	</tr>

       	 	<tr>
       	 		<td>3</td>
       	 		<td>Rownathan</td>
       	 		<td>Mwaruwa</td>
       	 		<td>mwaruwa@gmail.com</td>
       	 		<td>
       	 			<button type="button" class="btn btn-primary btn-sm shadow-none">Update</button>
       	 		    <button type="button" class="btn btn-danger btn-sm shadow-none mx-2">Delete</button>
       	 	    </td>
       	 	</tr>

       	 	<tr>
       	 		<td>4</td>
       	 		<td>Matthew</td>
       	 		<td>Masha</td>
       	 		<td>mashakenga@gmail.com</td>
       	 		<td>
       	 			<button type="button" class="btn btn-primary btn-sm shadow-none">Update</button>
       	 		    <button type="button" class="btn btn-danger btn-sm shadow-none mx-2">Delete</button>
       	 	    </td>
       	 	</tr>

       	 	<tr>
       	 		<td>5</td>
       	 		<td>Thobias</td>
       	 		<td>Tabia</td>
       	 		<td>tabia@gmail.com</td>
       	 		<td>
       	 			<button type="button" class="btn btn-primary btn-sm shadow-none">Update</button>
       	 		    <button type="button" class="btn btn-danger btn-sm shadow-none mx-2">Delete</button>
       	 	    </td>
       	 	</tr>

       	 	<tr>
       	 		<td>6</td>
       	 		<td>Joshua</td>
       	 		<td>Kasabu</td>
       	 		<td>kasabu@gmail.com</td>
       	 		<td>
       	 			<button type="button" class="btn btn-primary btn-sm shadow-none">Update</button>
       	 		    <button type="button" class="btn btn-danger btn-sm shadow-none mx-2">Delete</button>
       	 	    </td>
       	 	</tr>

       	 	<tr>
       	 		<td>7</td>
       	 		<td>Rozinah</td>
       	 		<td>Machocho</td>
       	 		<td>machocho@gmail.com</td>
       	 		<td>
       	 			<button type="button" class="btn  btn-primary btn-sm  shadow-none">Update</button>
       	 		    <button type="button" class="btn btn-danger btn-sm  shadow-none mx-2">Delete</button>
       	 	    </td>
       	 	</tr> -->

       	 </tbody>
       </table>
    </div>

    
 </div>

</body>
</html>