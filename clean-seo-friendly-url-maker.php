function cleanURL($string)
	{
	    $url = str_replace("'", '', $string);
	    $url = str_replace('%20', ' ', $url);
	    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url); // substitutes anything but letters, numbers and '_' with separator
	    $url = trim($url, "-");
	    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);  // you may opt for your own custom character map for encoding.
	    $url = strtolower($url);
	    $url = preg_replace('~[^-a-z0-9_]+~', '', $url); // keep only letters, numbers, '_' and separator
	    return $url;
	}
  
  // Calling
	 echo cleanURL("Useful for blog posts for instance, where a title can be something like");  // shellys-greatest-poem-2008
