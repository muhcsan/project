<?php

	//fungsi cek username
	function is_username_valid($username)
	{
		$upercase=preg_match("@[A-Z]@", $username);
		$lowercase=preg_match("@[a-z]@", $username);
		$number=preg_match("@[0-9]@", $username);
		$firstcar=preg_match("/^[A-Za-z]/", $username);
		

		if ($upercase && $lowercase && $number && strlen($username)>=5 && strlen($username)<= 9 && $firstcar)
			return true;
		else 
			return false;
	}

	//fungsi cek password
	function is_password_valid($password)
	{
		$upercase=preg_match("@[A-Z]@", $password);
		$lowercase=preg_match("@[a-z]@", $password);
		$number=preg_match("@[0-9]@", $password);
		$carspesial=preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $password);
		$samadengan=preg_match("/=/", $password);
		

		if ($upercase && $lowercase && $number && strlen($password)>=8 && $carspesial && $samadengan) 
			return true;
		else 
			return false;
	}

	// cek username
	if(is_username_valid("Xrutaf888")) 
		echo "TRUE <br>";
	else 
		echo "FALSE <br>";


	if(is_username_valid("1Diana")) 
		echo "TRUE <br>";
	else 
		echo "FALSE <br>";

	// cek password
	if(is_password_valid("passW0rd=")) 
		echo "TRUE <br>";
	else 
		echo "FALSE <br>";

	if(is_password_valid("C0d3YourFuture!#")) 
		echo "TRUE <br>";
	else 
		echo "FALSE <br>";
 ?>