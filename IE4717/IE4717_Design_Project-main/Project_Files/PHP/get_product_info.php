<?php
	function insert_product_price($id) {
		include "db_connect.php";

		$sql = "SELECT product_price FROM f32.products WHERE product_id = $id;";
		if ($result = mysqli_query($conn, $sql)) {
			$row = mysqli_fetch_row($result);
			echo $row[0];
		} else {
			echo "Failed fetching data from database.";
		}

		mysqli_close($conn);
	}

	function insert_product_name($id){
		include "db_connect.php";

		$sql = "SELECT product_name FROM f32.products WHERE product_id = $id;";
		if ($result = mysqli_query($conn, $sql)) {
			$row = mysqli_fetch_row($result);
			echo $row[0];
		} else {
			echo "Failed fetching data from database.";
		}

		mysqli_close($conn);
	}
?>