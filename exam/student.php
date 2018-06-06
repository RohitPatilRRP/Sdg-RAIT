<?php
include 'trial.php';

$result=$connect->query("SELECT 'subject' FROM `course_table_rev`");
echo "<table>";
while($row = $result->fetch_assoc())
{
	echo "<tr>";
	echo $row['subject'];
	
	echo "</tr>";
}
echo "</table>";
?>