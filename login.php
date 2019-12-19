<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<?php


$db_server["host"] = "localhost"; //database server
$db_server["username"] = "root"; // DB username
$db_server["password"] = ""; // DB password
$db_server["database"] = "web20";// database name

$mysql_con = mysqli_connect($db_server["host"], $db_server["username"], $db_server["password"], $db_server["database"]);

$mysql_con->query ('SET CHARACTER SET utf8');
$mysql_con->query ('SET COLLATION_CONNECTION=utf8_general_ci');
	
$my_query = "SELECT * FROM admin
WHERE name='admin'
and password='admin'";


	
$result = $mysql_con->query($my_query);




if (!isset($_SESSION['session_username']) || !isset($_SESSION['session_password']))
{
	echo "Λάθος δεδομένα <b>";
	echo "<br><a href='logoff.php'>Log off</a>";
}
else
{
	if (strlen($_POST['username']) < 2 || strlen($_POST['password']) < 2)
	{
		echo "<h2>Δεν έχετε δώσει τα σωστά δεδομένα!</h2>";
		echo "<br /><a href='loginform.php'></a>";
	}
	else
	{
		$_SESSION['session_username'] = $_POST['username'];
		echo "Welcome <b>".$_SESSION['session_username'];
		echo "<br><a href='index.php'>Let's go!</a>";
	}
}
	








$mysql_con->close();




?>