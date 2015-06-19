<?PHP

	if ($_SERVER['PHP_AUTH_USER'])
		$user = $_SERVER['PHP_AUTH_USER'];
	if ($_SERVER['PHP_AUTH_PW'])
		$pw = $_SERVER['PHP_AUTH_PW'];


	if ($user.":".$pw === "zaz:jaimelespetitsponeys")
	{
		
		$base_img = base64_encode(file_get_contents("../img/42.png"));
		echo "<html><body>\nBonjour Zaz<br />\n";
		echo "<img src='data:image/png;base64"
		echo $base_img;
		echo ">\n";
		echo "</body></html>\n";
	}
	else
	{
		header('Connection: close');
		//header();
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n* Closing connection #0\n";
	}
?>
