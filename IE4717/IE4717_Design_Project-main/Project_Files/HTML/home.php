<?php
	include "../php/setup_session.php";
	include "../php/get_product_info.php";
	include "../php/add_to_cart.php";
?>
<head>
	<title>J&E Co.</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="../CSS/common.css">
	<link rel="stylesheet" href="../CSS/home.css">
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
		<div id="new" class="flex max-width">
			<div class="flex min-width">
				<div id="new_cta" class="flex column">
					<h2>What's New</h2>
					<p>Brand new sports collection.</p>
					<div class="flex">
						<a href="men.php">
							<button>Men</button>
						</a>
						<a href="women.php">
							<button>Women</button>
						</a>
					</div>	
				</div>
				<div id="new_pic" class="flex">
					<img id="new_pic" src="../IMG/adidasshoe1_trans.png">
				</div>
			</div>
		</div>
		<div id="trend" class="flex max-width">
			<div id="trend_cont"class="min-width flex column">
				<div id="trend_title" class="flex column">
					<h2>What's Trending</h2>
					<p>Pick up on the latest fashion trends.</p>
				</div>
				<div id="trend_items" class="flex relative">
					<div class="trend_box flex column">						
						<img src="../IMG/adidastee.png">
						<div class="absolute" style="bottom: -120px;">
							<h3><?php insert_product_name(1) ?></h3>
							<p><?php insert_product_price(1) ?></p>
							<a href="<?php echo $_SERVER['PHP_SELF']; ?>?adidastee=1">Add to Cart</a>
						</div>						
					</div>
					<div class="trend_box flex column">						
						<img src="../IMG/adidaspants.png">			
						<div class="absolute" style="bottom: -120px;">
							<h3><?php insert_product_name(2) ?></h3>
							<p><?php insert_product_price(2) ?></p>
							<a href="<?php echo $_SERVER['PHP_SELF']; ?>?adidaspants=1">Add to Cart</a>
						</div>		
					</div>
					<div class="trend_box flex column">						
						<img src="../IMG/adidasshoe2.png">
						<div class="absolute" style="bottom: -120px;">
							<h3><?php insert_product_name(4) ?></h3>
							<p><?php insert_product_price(4) ?></p>
							<a href="<?php echo $_SERVER['PHP_SELF']; ?>?adidasshoe2=1">Add to Cart</a>
						</div>								
					</div>
				</div>
			</div>
		</div>
		<footer class="flex max-width">
			<div class="min-width flex">
				<i>Copyright &copy; J&E All Rights Reserved</i>
			</div>		
		</footer>
	</div>
</body>