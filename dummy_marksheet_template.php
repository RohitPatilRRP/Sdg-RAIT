<?php
session_start();
include "connect.php";
include "grade.php";
$s=$_SESSION['seatno'];
$b=$_SESSION['branch'];
$q=$_SESSION['sem'];
$z=$_SESSION['pattern'];
$r=$_SESSION['rollno'];

// $abc="select * from student_final_marksheet where seat=$q and branch=$z";
// $query_student = mysqli_query($db,$abc) or die(mysqli_error($db)); ;

$query_course = mysqli_query($db,"select * from course_table_rev where sem='$q' and pattern='$z' and branch='$b'");

$query_student = mysqli_query($db,"select * from student_final_marksheet where seat='$s' and branch='$b'") ;

$query_marks = mysqli_query($db,"select * from final where seat='$s'") ;


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
    <title>Exam result</title>

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
   <b><center>GRADE CARD</center></b></div>  
   <div style="margin-left: 3%;">
<?php

//$row = mysqli_fetch_array($query_student);
//cho $row['course_credits_th'];
//$count = mysqli_num_rows($row);
//echo $count;
while($row = mysqli_fetch_array($query_student)){
      ?>
      <pre>
            Name:<?php echo $row['full_name']; ?>         
            Examination:<?php echo $_SESSION['pattern'];  ?>
            Held in: <?php echo $row['exam_yr']; ?>              with Seat No:<?php echo $_SESSION['seatno']; ?><br>
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
      <td rowspan="3" width="300">Course Title</td>
      <td colspan="2"><p>Course credits</p></td>
      <td colspan="7">Grade</td>
      <td colspan="2"><p>Credits Earned</p>
      <p>(C)</p></td>
      <td colspan="2"><p>Grade Points</p>
      <p>(G)</p></td>
      <td colspan="2">C x G</td>
    </tr>
    <tr>
      <td width="31" rowspan="2">TH</td>
      <td width="37" rowspan="2">TW/P</td>
      <td width="29" rowspan="2">ESE</td>
      <td width="22" rowspan="2">OP</td>
      <td width="23" rowspan="2">OR</td>
      <td width="18" rowspan="2">IA</td>
      <td width="24" rowspan="2">TW</td>
      <td colspan="2">Overall</td>
      <td width="30" rowspan="2">TH</td>
      <td width="41" rowspan="2">TW/P</td>
      <td width="26" rowspan="2">TH</td>
      <td width="31" rowspan="2">TW</td>
      <td width="14" rowspan="2">TH</td>
      <td width="17" rowspan="2">TW</td>
    </tr>
    <tr>
      <td colspan="1">ESE</td>
      <td colspan="1">TW</td>
    </tr>


    

      <?php
    while( ($row = mysqli_fetch_array($query_marks)) && ($course_row = mysqli_fetch_array($query_course)) ){

      ?>
    <tr>
    <td><?php echo $course_row['subject']; ?></td>
    <td><?php echo $course_row['coursecredits_th'];?></td>
    <td><?php echo $course_row['coursecredits_tw']?></td>
    <td><?php echo eighty($row['ese']); ?></td>
    <td><?php echo twentyfive($row['op']); ?> </td>
    <td><?php echo twentyfive($row['oral']); ?> </td>
    <td><?php echo twenty($row['ia']); ?> </td>
    <td><?php echo twentyfive($row['tw']); ?> </td>
    <td><?php echo hundred(($row['ese'] + $row['ia'] ))?></td>
    <td><?php echo twentyfive($row['tw']); ?></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    
   <?php }
   ?>
  </tbody>
</table>

</td>

  <td >
    <pre>
      % of Marks Obtained  Letter Grade  Grade Point  Performance

      80  and  above             O             10     Outstanding 
      75.00 - 79.99              A              9     Excellent
      70.00 - 74.99              B              8     Very Good
      60.00 - 69.99              C              7     Good
      50.00 - 59.99              D              6     Fair
      45.00 - 49.99              E              5     Average
      40.00 - 44.99              P              4     Pass

      CGPI               Eqivalent % of marks

      6.75                60%
      7.25                65%
      7.75                70%
      8.25                75%

    </pre>
  </td>
</tr>
      
  </table>      
    
<pre>

College Roll No.                       Remark:                    SGPI:                   CGPI:

ESE-End Sem Exam, OP-Oral & Practical, OR-Oral, IA-Internal Assesment, TH-Theory, TW-Termwork, SGPI- Σ(CxGy Σ(C))
SGPI-Semester Grade Performance Index, CGPI-Cummulative Grade Performance Index, -- Not Applicable, P-Practical
</pre>


                <input type="button" value="Print" class="btn" onclick="PrintDoc()"/>


                <input type="button" value="Print Preview" class="btn" onclick="PrintPreview()"/>

                <input type="button" value="Logout" class="btn" onclick="window.location='http://localhost/AEM/Sdg-RAIT/staff.php'"/>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <!-- <a href="destroy.php">clear</a>
 -->
  </body>
</html>





