<?php
$mysql_link = new mysqli('localhost', 'root', '', 'web20');

if (mysqli_connect_error()) 
{
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}
echo "Success!";




$mysql_link->close();
?>