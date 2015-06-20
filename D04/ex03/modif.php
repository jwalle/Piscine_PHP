<?PHP
	
	session_start();
	
	if (file_exists("../private/passwd"))
	{
		$tab = file_get_contents("../private/passwd");
		$tab = unserialize($tab);
	}

	else
	{
		echo "ERROR\n";
		return;
	}

	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] == "OK")
	{
		$flag = 0;
		$i = 0;
		$login = $_POST['login'];
		$oldpw_h = hash('whirlpool', $_POST['oldpw']);
		$newpw_h = hash('whirlpool', $_POST['newpw']);
		
		foreach ($tab as $elem)
		{
			if ($elem['login'] == $login)
			{
				if ($elem['passwd'] == $oldpw_h)
				{
					$tab[$i]['passwd'] = $newpw_h;
					$tab = serialize($tab);
					file_put_contents("../private/passwd", $tab);
					echo "OK\n";
					$flag = 1;
					return;
				}
			}
			$i++;
		}

		if (flags == 0)
			echo "ERROR\n";
	}

	else
	{
		echo "ERROR\n";
	}

?>