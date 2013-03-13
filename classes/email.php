<?php
namespace Portfolio;

class Email
{
	private static $errors = array();

	public static function get_errors()
	{
		return self::$errors;
	}

	public static function set_error($error)
	{
		array_push(self::$errors, $error);
	}

	public static function validate_email($email)
	{
		$pattern = "/^[a-zA-Z0-9_.-]+@{1}[a-zA-Z0-9_.-]+\.[a-zA-Z0-9_.-]+/";
		if(preg_match($pattern, $email))
		{
			return true;
		}
		else
		{
			self::set_error("Email is not valid");
			return false;
		}
	}

	public static function validate_lengths($name, $subject, $email, $message)
	{	
		if(strlen($name) == 0 || strlen($subject) == 0 || strlen($email) == 0 || strlen($message) == 0)
		{
			self::set_error("A field has been left blank");
			return false;
		}
		else
		{
			return true;
		}
	}

	public static function send($name, $subject, $email, $message)
	{
		$to = "mclean.webdev@gmail.com";
		$message = wordwrap($message,70);
		$headers = "From: $email";
		mail($to, $name.":".$subject, $message, $headers);
	}

	public static function toString()
	{
		return "email";
	}
}

?>