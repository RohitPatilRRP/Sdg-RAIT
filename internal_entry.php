<?php
session_start();
include "connect.php"; 
include "grade.php";
$c=$_SESSION['subject_code'];
$b=$_SESSION['branch'];
$q=$_SESSION['sem'];
$z=$_SESSION['pattern'];


// $abc="select * from student_final_marksheet where seat=$q and branch=$z";
// $query_student = mysqli_query($db,$abc) or die(mysqli_error($db)); ;

$query_course = mysqli_query($db,"select * from student_final_marksheet where sem='$q' and pattern='$z' and branch='$b'");

//$query_student = mysqli_query($db,"select * from student_final_marksheet where seat='$s' and branch='$b'") ;

$query_marks = mysqli_query($db,"select * from final where subcode='$c'") ;


// echo print_r($query_student);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Print.css">
    <title>INTERNAL RESULT</title>

    <script type="text/javascript">

/*--This JavaScript method for Print command--*/

    function PrintDoc() {

        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')

        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }

/*--This JavaScript method for Print Preview command--*/

    function PrintPreview() {

        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write('<html><title>::Print Preview::</title><link rel="stylesheet" type="text/css" href="Print.css" media="screen"/></head><body">')

        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }

</script>


    
  </head>
  <body id="printarea">
    <div style="font-size: 20px;">
   <b><center>INTERNAL MARKSHEET</center></b></div>  
   <div style="margin-left: 3%;">
<?php

//$row = mysqli_fetch_array($query_student);
//cho $row['course_credits_th'];
//$count = mysqli_num_rows($row);
//echo $count;
while($row = mysqli_fetch_array($query_marks)){
      ?>
      <pre>
            SUBJECT_CODE:<?php echo $row['subcode']; ?><br>
          </pre>
          </div>
          <div>
       <?php 
    }
    ?>


          </div>

    <table>
     
    <tr>
      <td>
        <!-- <div class="row"> -->
            <!-- <div class="col-1"></div> -->
            <!-- <div class="col"> -->

    <table class="table" width="698"cellspacing="0"cellpadding="5" border="01" ">
            
            <tbody>
     
      <tr>
      <td rowspan="3" width="300">Roll_No</td>
      <td rowspan="3" width="300">Name</td>
      <td colspan="7">Grade</td>
    </tr>
    <tr>
      
      <td width="10" rowspan="2">ESE</td>
      <td width="10" rowspan="2">OP</td>
      <td width="23" rowspan="2">OR</td>
      <td width="18" rowspan="2">IA</td>
      <td width="24" rowspan="2">TW</td>
      <td colspan="2">Overall</td>
    </tr>
    <tr>
      <td colspan="1">ESE</td>
      <td colspan="1">TW</td>
    </tr>


    

      <?php
    while($course_row = mysqli_fetch_array($query_course)){

      ?>
    <form method="post">
    <tr>
    <td><?php echo $course_row['Roll_no']; ?></td>
    <td><?php echo $course_row['full_name']; ?></td>
    <td><input type="text" name="ESE" size="02"></td>
    <td><input type="text" name="OP" size="02"></td>
    <td><input type="text" name="ORAL" size="02"></td>
    <td><input type="text" name="IA" size="02"></td>
    <td><input type="text" name="TW" size="02"></td>
    <td><input type="text" name="OVERALL_ESE" size="02"></td>
    <td><input type="text" name="OVERALL_TW" size="02"></td>
    </tr>
    </form>
    
   <?php 
 }
   ?>
  </tbody>
</table>

</td>

  
</tr>
      
  </table>      
    

                <input type="button" value="Print" class="btn" onclick="PrintDoc()"/>


                <input type="button" value="Print Preview" class="btn" onclick="PrintPreview()"/>
                <button type="submit" name="submit" value="submit" onclick="pr()"> Submit </button> 
                
                <input type="button" value="Logout" class="btn" onclick="window.location='http://localhost/AEM/Sdg-RAIT/staff.php'"/>

                <?php
// php code to Insert data into mysql database from input text
// if(isset($_POST['submit']))
function pr() {
    
       
    $course_row = mysqli_fetch_array($query_course);
    $Roll_no =  $course_row['Roll_no']; 
    $Name =  $course_row['full_name'];
    $ESE = $_POST['ese'];
    $OP = $_POST['op'];
$ORAL = $_POST['oral'];
$IA = $_POST['ia'];
$TW = $_POST['tw'];
$OVERALL_ESE = $_POST['overall_ese'];
$OVERALL_TW = $_POST['overall_tw']; 
    
   

    
    

    $query = "INSERT INTO sc_400 (`Roll_no`, `full_name`, `ESE`, `OP`, `ORAL`, `IA`, `TW`, `OVERALL_ESE`, `OVERALL_TW`) VALUES ('$Roll_no','$Name','$ESE','$OP','$ORAL','$IA','$TW','$OVERALL_ESE','$OVERALL_TW');";
    
    $result = mysqli_query($db,$query);
    
    echo "haedad";
    if($result)
    {
        echo "successful";
    }else {

  echo "Unsuccessful";
  # code...
}
    
    
    
    mysqli_free_result($result);
    mysqli_close($db);
}

?>

 
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <!-- <a href="destroy.php">clear</a>
 -->
  </body>
</html>







