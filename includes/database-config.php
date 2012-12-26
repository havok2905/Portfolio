<?php

/**
 *	PDO Database Config
 *  Copy this file to database-config.php before making changes
 *	Change the values in this file to match the correct credentials on your environment
 *
 */

namespace Portfolio;

	class DBConfig
	{
		public static $host = "localhost";
		public static $database = "portfolio";
		public static $username = "havok2905";
		public static $password = "ee5ahcqh";		

	// return the connection settings
	public static function get_connection_settings() {
		return array('host' => self::$host,
			'database' => self::$database,
			'username' => self::$username,
			'password' => self::$password
			);
	}		
}