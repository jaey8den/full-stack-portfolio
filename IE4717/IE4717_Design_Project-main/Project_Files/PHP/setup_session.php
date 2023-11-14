<?php
	session_start();

// include "db_connect.php";

// $sql = "SELECT product_id, product_name, product_price FROM f32.products";
// if(!$result = mysqli_query($conn, $sql)) {
//	echo "Something went wrong when fetching product info: " . mysqli_error($conn);
// } -->

	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array(0, 0, 0, 0);
		$_SESSION['sub'] = array();
		$_SESSION['total'] = 0;
		// for($i = 0; $i < $result->num_rows; $i++){
		//  $row = $result->fetch_assoc();
			//array_push($_SESSION['cart'], 0);
		// }
	}

	if (isset($_GET['empty'])) {
		unset($_SESSION['cart']);
		header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	}
?>