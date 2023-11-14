<?php
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>