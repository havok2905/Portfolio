<?php 
	namespace Portfolio;
	
	class Email
	{
		public static function validate_email($email)
		{
			$pattern = "/^[a-zA-Z0-9_.-]+@{1}[a-zA-Z0-9_.-]+\.[a-zA-Z0-9_.-]+/";
			if(preg_match($pattern, $email))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public static function validate_lengths($name, $subject, $email, $message)
		{
			$error_array = array();
			
			if(strlen($name) == 0)
			{
				$error_array["name"] = false;
			}
			else
			{
				$error_array["name"] = true;
			}

			if(strlen($subject) == 0)
			{
				$error_array["subject"] = false;
			}
			else
			{
				$error_array["subject"] = true;
			}

			if(strlen($email) == 0)
			{
				$error_array["email"] = false;
			}
			else
			{
				$error_array["email"] = true;
			}

			if(strlen($message) == 0)
			{
				$error_array["message"] = false;
			}
			else
			{
				$error_array["message"] = true;
			}

			return $error_array;
		}

		public static function send($name, $subject, $email, $message)
		{
			$to = "mclean.webdev@gmail.com";
			$message = wordwrap($message,70);
			$headers = "From: $email";
			mail($to, $name.":".$subject, $message, $headers);
			
		}

		public static function log($name, $subject, $email, $message)
		{
			date_default_timezone_set("America/New_York");
			$datetime = date("Y/m/d H:i:s", time());
			Database::insert("email", array("message", "email", "subject", "datesent", "name"), array($message, $email, $subject, $datetime, $name));
		}
	}
?>
