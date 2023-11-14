<?php
    $to = "f32@localhost";
    $name = $_POST['custName'];
    $email = $_POST['custEmail'];
    $subject = $_POST['subject'];
    $message = $_POST['comments'];	
    $headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $send = mail($to, $subject, $message, $headers);
    
    if (!$send) {
	    echo "<script> alert('Error: Message not send. Please try again.') </script>";
	} else {
        echo "<script>";
            echo "alert('";
            echo "Your email has been received! \\n";
	        echo "Subject: " . $subject . "\\n";
	        echo "Message: " . $message;
            echo "')";
        echo "</script>";
	}
	
	header("refresh:1; url=../html/home.php");
    exit();

?>