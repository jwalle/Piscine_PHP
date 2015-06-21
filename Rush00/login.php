<?PHP
	session_start();
	include 'auth.php';

	$login = $_POST['login'];
	$passwd = $_POST['passwd'];
	$_SESSION['loggued_on_user'] = "";

	if (auth($login, $passwd) === FALSE)
	{
		// echo "ERROR\n";
		 header('Location: index.php');
	}
	else
	{
		$_SESSION['loggued_on_user'] = $login;
		//echo "OK\n";
		header('Location: login.html');
	}
	
?>