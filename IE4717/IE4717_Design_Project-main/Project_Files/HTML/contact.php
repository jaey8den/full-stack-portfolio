<?php
	include "../php/db_connect.php";
	include "../php/setup_session.php";
?>
<head>
	<title>J&E Co.</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="../CSS/common.css">
	<link rel="stylesheet" href="../CSS/contact.css">
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
        <div id="write_us" class="flex max-width">
            <div>           
                <h2>Write Us Anything!</h2>
                <p>Send us a message through our <a href="mailto:j&e@gmail.com">email</a> or fill in the contact form below!</p>
            </div>
        </div>
        <div id="contact_form" class="flex max-width">
            <div class="flex">
                <form class="flex column" action="../php/send_contactus_email.php" method="post">
                    <table style="width: 600px;">
                        <tr>
                            <td>Name*:</td>
                            <td>Title:</td>
                        </tr>
                        <tr>
                            <td tabindex="1">
                                <input type="text" placeholder="John Doe" id="custName" name="custName" onchange="allLetters(); validateContact();" required>
                            </td>
                            <td tabindex="2">
                                <select>
                                    <option selected disabled>Select a Title</option>
                                    <option>Mr</option>
                                    <option>Ms</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Email*:</td>
                            <td>Contact No.:</td>
                        </tr>
                        <tr>
                            <td tabindex="3">
                                <input type="email" placeholder="abc@def.com" id="custEmail" name="custEmail" onchange="validateEmail(); validateContact();" required>
                            </td>
                            <td tabindex="4">
                                <input type="text" id="number" placeholder="81234567" onchange="allNumber(); validateContact();">
                            </td>
                        </tr>
                        <tr>
                            <td>Subject*:</td>
                        </tr>
                        <tr>
                            <td colspan="2" tabindex="5">
                                <input type="text" style="width: 100%"placeholder="i.e. Delivery Issues, Review" name="subject" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Comments*:</td>
                        </tr>
                        <tr>
                            <td colspan="2" tabindex="6">
                                <textarea rows="5" name="comments"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input id="Submit" type="submit" value="Send Us" disabled>
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