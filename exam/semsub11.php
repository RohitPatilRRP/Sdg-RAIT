<?php
 
//Connect to our MySQL database using the PDO extension.
$mysqli=New MySQLi("localhost","root","","details");
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else echo'connected';
 
//Our select statement. This will retrieve the data that we want.
$sql = "SELECT subname FROM 'table 4'WHERE sem='$search'";
 
//Prepare the select statement.
$stmt = $mysqli->prepare($sql);
 
//Execute the statement.
$stmt->execute();
 
//Retrieve the rows using fetchAll.
$row= $stmt->fetchAll();
 
?>
 
<select>
    <?php foreach($rows as $row): ?>
        <option value="<?= $row['subname'];?></option>
    <?php endforeach; ?>
</select>