

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

$Rollno = $_POST['Rollno'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$year = $_POST['year'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "insert into marksheet(Rollno, branch, sem, year) values ('$Rollno', '$branch', '$sem', '$year')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
   header("location:marksheet.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>