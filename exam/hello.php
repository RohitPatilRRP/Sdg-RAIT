<?php
$output=NULL;
if(isset($_POST['submit']))
{
$mysqli=New MySQLi("localhost","root","","details");
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else echo'connected';

$search=$_POST['search'];


$result=$mysqli->query("SELECT * FROM table 4 WHERE sem='$search'");

$row_cnt = $result->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);

	//while( $row = mysqli_fetch_assoc( $result ) )
   while($row=$result->fetch_assoc())
	{
		$sem=$row['sem'];
		
		
		$output="sem:$sem<br/>
	}
}
}

?>

<form method="POST">
<input type="text" name="search"/>
<input type="submit" name="submit" value="search"/><br/>
<?php
echo $output;
?>
</form>