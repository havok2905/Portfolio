<?php
namespace Portfolio;

class Email
{
	private static $name_regex  	= "";
	private static $email_regx  	= "";
	private static $subject_regex 	= "";
	private static $message_regex   = "";

	public static function validateForm($name, $subject, $email, $message)
	{

	}

	public static function sendMail($name, $subject, $email, $message)
	{

	}

	public static function toString()
	{
		return "email";
	}
}

?>