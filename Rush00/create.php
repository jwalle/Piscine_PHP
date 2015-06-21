<?PHP
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "chupa";
$port	= 3306;
	
	session_start();
	$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == "OK")
	{
		$login = $_POST['login'];
		$sql = "SELECT username FROM users WHERE username =  '$login'";
		$result = mysqli_query($conn, $sql);
	}
	else
	{
		//header('Location: create_wrong.html');
		echo "Mauvaise";
		return;
	}
	

	if (mysqli_num_rows($result) > 0)
	{
		header('Location: create_wrong.html');
	}
	else
	{
		$passwd_h = hash('whirlpool', $_POST['passwd']);
		$req = "INSERT INTO `users` (`username`, `password`) VALUES('$login', '$passwd_h');";
		mysqli_query($conn, $req);
		mysqli_close($conn);
		header('Location: create_right.html');
		header('Location: index.php');
	}	
		//include ("create_right.html");


?>