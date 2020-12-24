<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/style1.css" />
</head>
<body>
<div class="form">

<p>Welcome <?php echo $_SESSION['username']; ?>!</p>

<p><a href="logout.php">Logout</a></p>

<a href="addplace.php" style="color:blue;">Add a new place.</a><br><br>

<a href="sylhetplace.php" style="text-decoration: none;">Populer Tourist Place In Sylhet.</a>

</div>
</body>
</html>
