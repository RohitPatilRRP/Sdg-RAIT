<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marksheet";

$rollno = $_POST['rollno'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$year = $_POST['year'];
$pattern = $_POST['pattern'];
$seat = $_POST['seat'];
$grade_ese= $_POST['grade_ese'];

//$grade_ese=$_POST['rowob['grade_ese']'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$i=0; 
//for($j=0;$j<$i;$j++){
//echo '$coursetable_array[$j][0]';
//echo '$main_array[$i][0]';
//$subject=$_POST['coursetable_array[$j][0]'];
$sql = "INSERT INTO `student_marks_cbsgs'(`seatno`, `rollno`, `branch`, `pattern`, `exam_year`, `sem`,'grade_ese') VALUES ('$seat', '$rollno', '$branch', '$pattern','$year','$sem','$grade_ese')";
//$sql = INSERT INTO `student_marks_cbsgs`(`seatno`, `rollno`, `branch`, `pattern`, `exam_year`, `sem`, `subject_name`, `coursecredits_th`, `coursecredits_tw`, `grade_ese`, `grade_oralprac`, `grade_oral`, `grade_ia`, `grade_tw`, `overall_ese`, `overall_tw`, `creditsearned_th`, `creditsearned_tw`, `cxg_th`, `cxg_tw`) VALUES ('$rollno', '$rollno', '$branch', '$pattern','$year','$sem','$coursetable','','','','','','','','','','','','','')
$result=mysqli_query($conn,$sql);
//$sub_num=mysqli_num_rows($result);

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
   //header("location:marksheet.html");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
//echo 'coursetable_array[$j][0]';
$conn->close();
?>