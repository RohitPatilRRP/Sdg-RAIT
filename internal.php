<?php
include "connect.php";
//include "internal_entry.php"
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script>
function validateform(){  
//var rollno=document.myform.rollno.value;  
var subject=document.myform.subject.value; 
var pattern=document.myform.pattern.value;  
var branch=document.myform.branch.value;  
var sem=document.myform.sem.value;  


//var password=document.myform.password.value;  
  
if (branch==null || branch==""){  
  alert("Branch must not be blank");  
  return false;  
}
if (sem==null || sem==""){  
  alert("Semester must not be blank");  
  return false;  
}
if (subject==null || subject==""){  
  alert("Subject must not be blank");  
  return false;  
}
if (pattern==null || pattern==""){  
  alert("Pattern must not be blank");  
  return false;  
}//else if((password.length<6) ||(password.length==' ') ){  
 // alert("Password must be at least 6 characters long.");  
  //return false;  

}  
</script>
</head>

<style>
input[type=text], select {
    width: 50%;
    height:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   font-size: 20px;
}

input[type=password], select {
    width: 50%;
height:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 20px;
    
}

input[type=submit] {
    width: 50%;
    background-color: #DC143C;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    font-size: 20px;
}

input[type=submit]:hover {
    background-color: #B22222;
    
}

div {
    width: 50%;
    height: 50%;
    align: center;
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 20px;
}
.center {
    margin: auto;
    width: 50%;
    border: 3px solid #800000;
    padding: 10px;
    text-align: center;
    font-size: 20px;
   font-weight : bold; 
}
</style>
<body>

<h3 style="text-align: left; color: #8B0000; font-family: Arial; font-size: 36px;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ENTER INTERNAL MARKS</h3>

<div class="center">
 <form name="myform" method="POST" onsubmit="return validateform()" >  
Subject Code: <input type="text" name="subject_code" id="subject_code"><br/>
Branch:  <input type="text" name="branch" id="branch" ><br/>  
Semester:  <input type="text" name="sem" id="sem"><br/>  
Pattern: <input type="text" name="pattern" id="pattern"><br/>  
<input type="submit" value="Show Students" id="LOGIN" name="LOGIN"">  
</form>  
</div>

<div>
<?php
if(isset($_POST['LOGIN'])){
  	$r="15CE1044";//$_POST['rollno'];
	$q = $_POST['sem'];
	$z = $_POST['pattern'];
	$b= $_POST['branch'];
	$c = $_POST['subject_code'];
	$sel=mysqli_query($db,"select * from student_final_marksheet where sem='$q' and pattern='$z' and branch='$b'") or die(mysqli_error($db)); ;
		if(mysqli_num_rows($sel)>0){
		    echo 
		"<table width=\"600\" border=\"1\" cellpadding=\"10\" cellspacing=\"1\">
		<tr>
		<th>Branch</th>
		<th>Semester</th>
		<th>Pattern</th>
		<th>Subject</th>
		</tr>";
		while ($arr=mysqli_fetch_array($sel)){
		echo "<tr>";
		echo "<td><a href=\"index.php\">".$arr['branch']."</a></td>";
		echo "<td>".$arr['sem']."</td>";
		echo "<td>".$arr['pattern']."</td>";
		echo "<td>".$arr['subject']."</td>";
		echo "</tr>";
		}
		$_SESSION['subject_code']=$c;
		$_SESSION['branch']=$b;
		$_SESSION['sem']=$q;
		$_SESSION['pattern']=$z;
    $_SESSION['rollno']=$r;
	header("Location: internal_entry.php");
		}
		else
		{
		    echo "<h2>No Results Found</h2>";
		}
}
?>    
</div>
</body>
</html>



