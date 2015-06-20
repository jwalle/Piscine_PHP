<?PHP
	session_start();
	include 'auth.php';

	$login = $_GET['login'];
	$passwd = $_GET['passwd'];
	$_SESSION['loggued_on_user'] = "";

	if (auth($login, $passwd) === FALSE)
	{
		 echo "ERROR\n";
	}
	else
	{
		$_SESSION['loggued_on_user'] = $login;
		echo "OK\n";
	}
	
?>