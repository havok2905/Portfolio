<?php
namespace Portfolio;
header('Content-type: application/json');
include("../classes/bootstrap.php");

$name = $_POST['name'];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$v_email = false;
$v_length = false; 

if(Email::validate_email($email))
{
	$v_email = true;
}

if(Email::validate_lengths($name, $subject, $email, $message))
{
	$v_length = true;
}

if($v_email == true && $v_length == true)
{
	try
	{
		Email::send($name, $subject, $email, $message);
		$response = array("Email has been sent");
	}
	catch(Exception $e)
	{
		$response = array("There is an error with the system. Sorry for the trouble.");
	}
}
else
{
	$response = Email::get_errors();
}

echo json_encode($response);
?>