<?php
function mailing($to1,$message1,$email1 ){
$to = $to1;
	$subject = "Contact from DishaaPro";
	
	//$message = "Following Information" . "<br>";
    $message .= "Name=" . $message1 ."<br>";
   
	$email=$email1;
	 // Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From:'. $email . "\r\n";
	//$headers .= 'Cc:' . "nmohapatra@gmail.com" . "\r\n";
	//$headers .= 'Bcc:' ."nmohapatra@idslogic.co.uk" . "\r\n";
	
	$return = mail($to,$subject,$message,$headers);
  //Email information
    if($return != 1)
	{
		$msg = "Error, Please try again";
	}
    else{
  //Email response
       $msg = "Thank you for contacting us!";
	}
  }
  mailing('satya@gmail.com','good','biswa110b@gmail.com');
  
  ?>