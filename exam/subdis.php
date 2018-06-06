



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
echo "<table>";
while($row = $result->fetch_assoc()){

	echo "<tr>";
	echo <td>$row['subject']</td><td>$row['coursecredits_th']</td><td>$row['coursecredits_tw']</td>;
	echo "</tr>";
 }
 echo "</table>";
  }
?>
<html>
<body>
<div class="table-responsive box box-body">
<table  class="table" border="1">

            
            
            
            <tr>
                <td rowspan="3"> SUBJECTS</td>
                <td colspan="2"> COURSE CREDITS</td>
                <td colspan="7">GRADE</td>
				<td colspan="2">CREDITS EARNED (C)</td>
				<td colspan="2">GRADE POINTS (G)</td>
				<td colspan="2">C X G</td>
            </tr>
            
            <tr>
				<td rowspan="2">TH</td>
				<td rowspan="2">TW/P</td>
			    
				<td rowspan="2">ESE</td>
				<td rowspan="2">OP</td>
				<td rowspan="2">OR</td>
				<td rowspan="2">IA</td>
				<td rowspan="2">TW</td>
				<td rowspan="1" colspan="2">OVERALL</td>
				
				<td rowspan="2">TH</td>
				<td rowspan="2">TW/P</td>
				<td rowspan="2">TH</td>
				<td rowspan="2">TW</td>
				<td rowspan="2">TH</td>
				<td rowspan="2">TW</td>
            </tr>
			<tr>
				<td>ESE</td>
				<td>TW</td>
			</tr>
			 
</table>
</body>

</html>





