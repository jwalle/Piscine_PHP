<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "chupa";
$port	= 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_query($conn, "CREATE DATABASE $dbname");
mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection

$req = "CREATE TABLE IF NOT EXISTS `users` (`username` varchar(255) NOT NULL,`password` varchar(255) NOT NULL, UNIQUE KEY `username` (`username`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
mysqli_query($conn, $req);
$req = "INSERT INTO `users` (`username`, `password`) VALUES('jwalle', 'plop'),('jbrozzu', 'coucou');";
mysqli_query($conn, $req);
$req = " CREATE TABLE IF NOT EXISTS `bonbon` (`ID` int(11) NOT NULL AUTO_INCREMENT,`name` text NOT NULL,`price` int(11) NOT NULL,`img` varchar(500) NOT NULL,`flavor` text NOT NULL,`package` text NOT NULL,PRIMARY KEY (`ID`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15;";
mysqli_query($conn, $req);
$req = "INSERT INTO `bonbon` (`ID`, `name`, `price`, `img`, `flavor`, `package`) VALUES
(1, 'magic_paq', 100, 'URL', 'magic', 'paquet'),
(2, 'fruit_paq', 100, 'URL', 'fruit', 'paquet'),
(3, 'gum_paq', 100, 'URL', 'gum', 'paquet'),
(4, 'bestof_paq', 120, 'URL', 'bestof', 'paquet'),
(5, 'magic_stand', 300, 'URL', 'magic', 'stand'),
(6, 'fruit_stand', 300, 'URL', 'fruit', 'stand'),
(7, 'gum_stand', 300, 'URL', 'gum', 'stand'),
(8, 'bestof_stand', 300, 'URL', 'bestof', 'stand'),
(9, 'magic_box', 200, 'URL', 'magic', 'box'),
(10, 'fruit_box', 200, 'URL', 'fruit', 'box'),
(11, 'gum_box', 200, 'URL', 'gum', 'box'),
(12, 'bestof_box', 200, 'URL', 'bestof', 'box')";
mysqli_query($conn, $req);

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_objet($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}

mysqli_close($conn);
?>