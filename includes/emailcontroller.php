<?php
	namespace Portfolio;
	include("bootstrap.php");

	// Check for post data and validate email
	// Check to make sure each input has been complete
	// Send and log email
	if(!isset($_POST["send"]) || $_POST["send"]=="")
	{
		$_POST["send"] = "";
		var_dump("fail"); die();
	}
	else if($_POST["send"] == "send")
	{
		$email = $_POST["email"];
		$name = $_POST["name"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		$errorarray = Email::validate_lengths($name, $subject, $email, $message);

		$send = true;

		foreach ($errorarray as $key => $value)
		{
			if($value == false)
			{
				$send = false;
			}
		}

		if($send == true)
		{
			$isvalid = Email::validate_email($email);

			if($isvalid == true)
			{
				Email::send($name, $subject, $email, $message);
				Email::log($name, $subject, $email, $message);
			}
		}
	}
?>