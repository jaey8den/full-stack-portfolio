<?php
    session_start();
    session_regenerate_id(TRUE);
    
    include "db_connect.php";
    include "get_product_info.php";

    $id = session_id();
    $name = $_POST['custName'];
    $email = $_POST['custEmail'];

    $sql = "INSERT IGNORE INTO f32.orders (order_id, name) VALUES ('$id', '$name');";
    if (!mysqli_query($conn, $sql)) {
        echo "Failed to update database: " . mysqli_error($conn);
        mysqli_close($conn);
    }

	for ($i = 0; $i < count($_SESSION['cart']); $i++){		  				
        if ($_SESSION['cart'][$i] > 0) {
            
            switch ($i) {
                case 0: $product_name = 'Adidas_Black_Tee';
                break;
                case 1: $product_name = 'Adidas_Black_Track_Pants';
                break;
                case 2: $product_name = 'Adidas_Astir_Shoes';
                break;
                case 3: $product_name = 'Adidas_Chroma_White_Shoes';
                break;                  
            }

            
		    $sql = "UPDATE f32.orders SET $product_name = " . $_SESSION['cart'][$i] . " WHERE order_id = '$id';";
		    if (!mysqli_query($conn, $sql)) {
			    echo "Failed to update database: " . mysqli_error($conn);
			    mysqli_close($conn);
		    }
	    }   	
    }
    
    $sql = "UPDATE f32.orders SET total = " . $_SESSION['total'] . ", email = '$email' WHERE order_id = '$id';";
    if (!mysqli_query($conn, $sql)) {
        echo "Failed to update database: " . mysqli_error($conn);
        mysqli_close($conn);
    }

	$subject = "J&E Co.";		  
	$message = "Your Order Id is:" . $id;	
	$headers = 'From: f32@localhost' . "\r\n" .
	'Reply-To: f32@localhost' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$send = mail($email, $subject, $message, $headers);
	if (!$send) {
	    echo "<script> alert('Error: Message not send. Please try again.') </script>";
	} else {
        echo "<script>";
            echo "alert('";
            echo "Your order and email was sent successfully! \\n";
	        echo $subject . "\\n";
	        echo $message;
            echo "')";
        echo "</script>";
	}

    mysqli_close($conn);

    session_destroy();

	header("refresh:1; url=../html/home.php");
    exit();
?>