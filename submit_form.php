<?php


$name = $_POST['name'];
$email = $_POST['email'];
$request = $_POST['request'];


        $to = "gurjantsinghsidhu@ymail.com";
        $subject = "$name"; 
        
        $message = "From: $email<br /><br />Message: $request<br />";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <contact@tworldd.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        echo "Your message has been sent";
        echo "<h3><a href='http://tworldd.com/#'>Go back to the website</a><h3>";
        

?>
	