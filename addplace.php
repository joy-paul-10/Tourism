<?php

require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>





<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['placename'])){
		$place =		 stripslashes($_REQUEST['placename']); // removes backslashes
		$place = 	 mysqli_real_escape_string($con,$place); //escapes special characters in a string
		$userid = $_SESSION['userid'];
		$description =       stripslashes($_REQUEST['description']);
		$description =       mysqli_real_escape_string($con,$description);

        $query = "INSERT into `places` (place_id, place_name, description,place_creator) VALUES (NULL, '$place', '$description','$userid')";
        $result = mysqli_query($con,$query);

        if($result){
            echo "<div class='form'><h3>New place added successfully.</h3><<br/></div>";
        }
    }else{
?>














<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<a href="logout.php">Logout</a><br><br>

<div align="center" style="border: 1px solid blue; padding: 30px">
<p style="color:chocolate;"><i>Add a new place</i></p><br>

<form action="" method="post" name="Information ">

<p style="color:blue;">Place Name:</p>
<input type="text" name="placename" required>

<p style="color:blue;">Add picture:</p>
<input type="file"><br><br>

<p style="color:blue;"><i>Add description</i></p><br>
<input type="text" name="description" required>

<input type="submit" name="submit" value="ADD">
</form>
</div>



<?php } ?>
</body>
</html>
