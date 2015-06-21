<?PHP
	
	function auth($login, $passwd)
	{
		if (!$login || !$passwd || !file_exists('../private/passwd'))
			return FALSE;
		$tab = file_get_contents('../private/passwd');
		$tab = unserialize($tab);
		foreach ($tab as $elem)
		{
			if ($elem['login'] == $login)
				if ($elem['passwd'] == hash('whirlpool', $passwd))
					return TRUE;
		}
		return FALSE;
	}
	
?>