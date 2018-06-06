<?php
$output=NULL;
if(isset($_POST['submit'])){
//connect to db
$mysqli=NEW MySQLi("localhost","root","","details");

$search=$_POST['search'];


// query to db
$result=$mysqli->query("SELECT `subname` FROM `table 4` WHERE sem='$search'");

$row_cnt = $result->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);




if($result->num_rows> 0)
	while($rows=$result->fetch_assoc())	
	{
		$subname=$rows['subname'];
		//$sem=$rows['sem'];
		$output=$subname;
	
	}
else{
	
	$output="no results";
	
	}



}
?>

<form method="POST">
<input type="text" name="search"/>
<input type="submit" name="submit" value="search"/>
<select><?php while($rows = mysqli_fetch_assoc($result)):;?>
<option><?php echo $rows[0];?></option>
<?php endwhile;?>
</select>






</form>
<?php echo $output; ?>