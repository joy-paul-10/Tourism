<!DOCTYPE html>
<html>
<head>
	<title>Sylhet Tourism</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<div id="container">
		<div id="head">
			<img src="img/logo.jpg">
		</div>
		<div id="list">
			<ul>
				<li><a href="index1.php" style="text-decorations:none; color:inherit;">Home</a></li>
				<li><a href="login.php" style="text-decorations:none; color:inherit;">Login</a></li>
				<li><a href="registration.php" style="text-decorations:none; color:inherit;">Signup</a></li>
				<li><a href="url" style="text-decorations:none; color:inherit;">Contact us</a></li>
				<li><a href="sylhetplace.php" style="text-decorations:none; color:inherit;">Places</a></li>
			</ul>
		</div>
		<div id="middle">
			<div id="slide">
				<img name="slide">
			</div>
			<div id="details">
				<h1>Welcome to <span style="color:#c8a46d; font-family: Segoe Script;">Sylhet</span>
				<span style="color:#ff0000; font-family: Segoe Script;">Tourism</span></h1>

				<h3>Here you can find every details about <span style="color:#ff0000; font-family: Segoe Script;">Tourist Places</span> in 
				<span style="color:#c8a46d; font-family: Segoe Script;">Sylhet.</span></h3>	

				<h3>You need to <span style="color:#ff0000; font-family: Segoe Script;">Log IN</span> for change or add description about a place.</h3>
			</div>
		</div>
	</div>

	<script>
	var i = 0; // Start point
	var images = [];
	var time = 2500;

	// Image List
	images[0] = 'img/bisna.jpg';
	images[1] = 'img/hakaluki.jpg';
	images[2] = 'img/hamham.jpg';
	images[3] = 'img/jaflong.jpg';
	images[4] = 'img/lalakhal.jpg';
	images[5] = 'img/madob.jpg';
	images[6] = 'img/ratargul.jpg';
	images[7] = 'img/tangua.jpg';

	// Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;

</script>
</body>
</html>