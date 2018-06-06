<?php
$output=NULL;
if(isset($_POST['submit']))
{
$mysqli=New MySQLi("localhost","root","","details");
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//else echo'connected';

$search=$_POST['search'];


$result=$mysqli->query("SELECT * FROM dummy WHERE Rollno='$search'");

$row_cnt = $result->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);

	while( $row = mysqli_fetch_assoc( $result ) )
	//while($row=$result->fetch_assoc())
	{
		$Rollno=$row['Rollno'];
		$sub1=$row['sub1'];
		$sub2=$row['sub2'];
		$sub3=$row['sub3'];
		
		$output="Rollno:$Rollno<br/> sub1:$sub1<br/> sub2=$sub2 <br/> sub3=$sub3";
		
	}
//}
}

?>

<form method="POST">
<input type="text" name="search"/>
<input type="submit" name="submit" value="search"/><br/>
<?php
echo $output;
?>
</form>