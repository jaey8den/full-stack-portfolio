<?php
/*
    This is meant to help display order id of customer who checkout in cart page. But its not working not sure why cannot
    find column of the name in db when name is already there. Purpose to be used in send_email.php to display order id
    using name column when customer keys in name in the name field form of cart page.
*/
function insert_order_id($name) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT order_id FROM f32.orders WHERE name= $name;";
	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_row($result);
		echo $row[0];
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}
?>
