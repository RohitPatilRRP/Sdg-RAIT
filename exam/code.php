<html>
<head>
<title>table with data</title>
</head>
<body>
<table>
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
	<?php
	$conn=mysqli_connect("localhost","root","","marksheet");
	if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
	}
	$sql="SELECT * from course_table_rev";
	$result=$conn->query($sql);
	if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
 echo "<tr>
                <td> SUBJECTS</td>".$row["subject"]."<td> COURSE CREDITS</td><tr>
	<td>TH</td><td>TW/P</td>".$row["coursecredits_th"].$row["coursecredits_tw"]";}
	echo "</table>";
	}
	else{
	echo "no results";
	}		
	$conn->close();
			
	?>		

</table>
</body>
</html>