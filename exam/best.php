<?php
if(isset($_POST['submit']))
{
$mysqli=New MySQLi("localhost","root","","marksheet");
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo'connected';}
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$pattern=$_POST['pattern'];
$result=$mysqli->query("SELECT * FROM `course_table_rev` WHERE sem='$sem' and branch='$branch' and pattern='$pattern'");
while ($row = $result->fetch_assoc()) {
    echo $row['subject'];
	echo $row['coursecredits_th'];
	
	
}





}







?>