<?php
$mysqli=New MySQLi("localhost","root","","marksheet");
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo'connected';}
?>