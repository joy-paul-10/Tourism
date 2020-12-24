<?php

	$place_id = $_GET['place_id'];

?>
<?php

require('db.php');
$sql = "SELECT * FROM places WHERE place_id = '".$place_id."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo  "<h1 align='center'>"."Name : ".$row['place_name']."</h1>".'<br>';
        echo  '<p style="color:green; font-size:20px" align="left">'."Description : ".$row['description'].'</p>';
    }
} else {
    echo "0 results";
}
$con->close();
?>