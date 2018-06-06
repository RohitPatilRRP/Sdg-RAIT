<?php
$output=NULL;
if(isset($_POST['submit']))
{
$mysqli=New MySQLi("localhost","root","","details");
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//else { echo'connected';}
$search=$_POST['search'];


$result=$mysqli->query("SELECT `subname` FROM `table 4` WHERE sem='$search'");

//$row_cnt = $result->num_rows;

    //printf("Result set has %d rows.\n", $row_cnt);

	//while( $row = mysqli_fetch_array($result))
	//{
		
		//$subname=$row['subname'];
		
		//$output="subname:$subname";
		
	//}

}

?>
<html>
<body>


<form method="POST">
 
<input type="text" name="search"/>
<input type="submit" name="submit" value="search"/><br/>
<select><?php while($row = mysqli_fetch_assoc($result)):;?>
<option><?php echo $row[0]=$row['subname'];?></option>
<?php endwhile;?>
</select>
</form>
</body>
</html>