<?PHP

	if ($_SERVER['PHP_AUTH_USER'])
		$user = $_SERVER['PHP_AUTH_USER'];
	if ($_SERVER['PHP_AUTH_PW'])
		$pw = $_SERVER['PHP_AUTH_PW'];

	if ($user.":".$pw === "zaz:jaimelespetitsponeys")
	{
		
		echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,";
		echo base64_encode(file_get_contents("../img/42.png"));
		echo "'>\n";
		echo "</body></html>\n";
	}
	else
	{
		header('WWW-Authenticate: Basic realm="Espace Membres"');
		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}
?>
