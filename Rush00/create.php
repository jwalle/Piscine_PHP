<?PHP
	
	session_start();
	
	if (file_exists("../private/passwd"))
	{
		$tab = file_get_contents("../private/passwd");
		$tab = unserialize($tab);
	}
	else
	{
		mkdir("../private");
	}

	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == "OK")
	{
		$login = $_POST['login'];

		foreach ($tab as $elem)
		{
			if ($elem['login'] == $login)
			{
				//echo "ERROR\n";
				header('Location: create_wrong.html');
				return;
			}
		}

		$i = 0;
		$passwd_h = hash('whirlpool', $_POST['passwd']);
		while ($tab[$i])
			$i++;
		$tab[$i] = array("login" => $login, "passwd" => $passwd_h);
		$tab = serialize($tab);
		file_put_contents("../private/passwd", $tab);
		//echo "OK\n";
		header('Location: create_right.html');
	}
	else
	{
		//echo "ERROR\n";
		header('Location: create_wrong.html');
		return;
	}

?>