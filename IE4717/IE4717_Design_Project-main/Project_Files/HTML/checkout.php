<?php
	include "../php/setup_session.php";
    include "../php/get_product_info.php";
?>
<head>
	<title>J&E Co.</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="../CSS/common.css">
	<link rel="stylesheet" href="../CSS/checkout.css">
	<script src="../JS/validation.js"></script>
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
        <div id="cart" class="flex max-width">
            <div class="min-width flex column">
                <h2>Your Cart</h2>
               
                    <p>
                        Your cart contains 
                        <?php 
                            $total_items = 0;
                            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                                $total_items = $total_items + $_SESSION['cart'][$i];
                            } 
                            echo $total_items;
                        ?> 
                        item(s).
                        <a href="<?php echo $_SERVER['PHP_SELF'];?> ?empty=1">
                            <button id="empty_cart">Empty Cart Here</button>
                        </a>
                    </p>                 
                <div>
                    <table border="1">
                        <tr>
                            <th class="cart_image"></th>
                            <th class="cart_name">Product</th>
                            <th class="cart_qty">Quantity</th>
                            <th class="cart_price">Price</th>
                            <th class="cart_width">Subtotal</th>
                        </tr>
                        <?php
                            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                                if ($_SESSION['cart'][$i] > 0) {
                                    if ($i > 1) {
                                        $class = 'wide';
                                    } else {
                                        $class = 'tall';
                                    }

                                    switch ($i) {
                                        case 0: $file_name = 'adidastee';
                                        break;
                                        case 1: $file_name = 'adidaspants';
                                        break;
                                        case 2: $file_name = 'adidasshoe1';
                                        break;
                                        case 3: $file_name = 'adidasshoe2';
                                        break;
                                    }

                                    ob_start();                                          
                                    insert_product_price($i+1);
                                    $price = ob_get_contents();
                                    ob_end_clean();
                                    
                                    $_SESSION['sub'][$i] = $_SESSION['cart'][$i] * $price;
                                    $_SESSION['total'] = $_SESSION['total'] + $_SESSION['sub'][$i];                         
                            
                                    echo "<tr>";
                                        echo "<td class=\"cart_image\">";
                                            echo "<img class=\"".$class."\"src=\"../IMG/".$file_name.".png\">";
                                        echo "</td>";
                                        echo "<td>";                                           
                                            echo insert_product_name($i+1);
                                        echo "</td>";
                                        echo "<td>";
                                            echo $_SESSION['cart'][$i];
                                        echo "</td>";
                                        echo "<td>";
                                            echo "$";
                                            echo $price;
                                        echo "</td>";
                                        echo "<td>";
                                            echo "$";
                                            echo number_format((float)$_SESSION['sub'][$i], 2, '.', '');
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </table>
                </div>    
            </div>
        </div>
        <div id="checkout" class="flex max-width">
            <div id="checkout_box" class="flex min-width column">
                <form action="../php/checkout.php" method="post">
                    <table id="checkout_table">
                        <tr>
                            <td>Name:*</td>
                            <td>Email:*</td>
                            <td rowspan="2">
                                <input id="Submit" type="submit" value="Checkout" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" tabindex="1" id="custName" name="custName" placeholder="John Doe" onchange="allLetters(); validateInput();" required>
                            </td>
                            <td>
                                <input type="email" tabindex="2" id="custEmail" name="custEmail" placeholder="john.doe@abc.com" onchange="validateEmail(); validateInput();" required>
                            </td>
                        </tr>
                    </table>
                </form>                          
            </div>                             
        </div>
		<footer class="flex max-width">
			<div class="min-width flex">
				<i>Copyright &copy; J&E All Rights Reserved</i>
			</div>		
		</footer>
	</div>
</body>