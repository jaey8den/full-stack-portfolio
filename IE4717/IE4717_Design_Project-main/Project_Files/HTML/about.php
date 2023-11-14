<?php
	include "../php/db_connect.php";
	include "../php/setup_session.php";
?>
<head>
	<title>J&E Co.</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="../CSS/common.css">
	<link rel="stylesheet" href="../CSS/about.css">
	<script src="../JS/loginPopup.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
	<div class="flex column">
		<div id="icon" class="flex max-width fixed">
			<div class="min-width">
				<h1>J&E</h1>
			</div>			
		</div>
		<div id="navbar" class="flex max-width fixed">
			<div class="flex min-width">
				<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="men.php">MEN</a></li>
					<li><a href="women.php">WOMEN</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
				</ul>
				<div id="cart_icon">
					<p><a href="checkout.php">CART</a></p>
				</div>
			</div>
		</div>
		<div class="blank"></div>
		<footer class="flex max-width">
			<div class="min-width flex">
				<i>Copyright &copy; J&E All Rights Reserved</i>
			</div>		
		</footer>
	</div>
</body>