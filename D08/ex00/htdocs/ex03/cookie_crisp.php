<?PHP
		if ($_GET['action'])
			$action = $_GET['action'];
		if ($_GET['name'])
			$name = $_GET['name'];
		if ($_GET['value'])
			$value = $_GET['value'];
		
	if ($action === "set")
		setcookie($name, $value, time() + 3600);
	else if ($action === "del")
		setcookie($name, $value, time() - 3600);
	else if ($action === "get" && $_COOKIE[$name])
			echo $_COOKIE[$name]."n";
?>
