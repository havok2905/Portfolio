<?php
namespace Portfolio;

class Blog
{
	////////LIMITOR////////
	//return by number of posts (LIMIT BY)
	
	///////SELECTORS///////
	//return by max_date (Datestring or today)
	//return by concurrent months
	//return by postID
	//return by Category

	public static buildRequest(params)
	{
		foreach ($params as $key => $param) 
		{
			switch($param)
			{
				case "id":
					break;
				case "max_date":
					break;
				case "month":
					break;
				case "category":
					break;
				case "num":
					break;
			}
		}
	}

	public static execute()
	{

	}

}

?>