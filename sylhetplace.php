<?php

 //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>Welcome!</p>
<p align="center">POPULER TOURIST PLACE IN SYLHET</p>
<!-- <P align="center"><a href="tangua.php"  style="text-decoration:none; color:blue;">টাঙুয়ার হাওর.</a></P>
<P align="center"><a href="bichanakandi.php"  style="text-decoration:none; color:blue;">বিছনাকান্দি.</a></P>
<P align="center"><a href="ratargul.php"  style="text-decoration:none; color:blue;">রাতারগুল</a></P>
<P align="center"><a href="lalakhal.php"  style="text-decoration:none; color:blue;">লালাখাল</a></P>
<P align="center"><a href="jaflong.php"  style="text-decoration:none; color:blue;">জাফলং</a></P>
<P align="center"><a href="hakaluki.php"  style="text-decoration:none; color:blue;">হাকালুকি হাওর</a></P>
<P align="center"><a href="madob.php"  style="text-decoration:none; color:blue;">মাধবকুণ্ড জলপ্রপাত</a></P>
<P align="center"><a href="hamham.php"  style="text-decoration:none; color:blue;">হামহাম ঝর্ণা</a></P> -->
<?php
require('db.php');
$sql = "SELECT * FROM places";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<br><div align='center'><a id='placename' href='place_descript.php?place_id=".$row["place_id"]."'>". $row["place_name"]."</a></div><br>";
    }
} else {
    echo "0 results";
}
$con->close();
?>

</body>
</html>