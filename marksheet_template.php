<?php
session_start();
include "connect.php";
$q=$_SESSION['seatno'];
$z=$_SESSION['branch'];
$b=$_SESSION['sem'];
$s=$_SESSION['pattern'];

$query_student = mysqli_query($db,"select * from student_final_marksheet where seat=$q") or die(mysqli_error($db)); ;
//$query_course = mysqli_query($db,"select * from course_table_rev where sem='$b' and pattern='$s'") or die(mysqli_error($db)); ;
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
while($row = mysqli_fetch_array($query_student)){
      ?>
  
            Name:<?php echo $row['full_name']; ?>         
            Examination:<?php echo $_SESSION['pattern'];  ?> <br>
            Held in: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;             with Seat No:<?php echo $_SESSION['seatno']; ?><br>
          
          </div>
          <div>
       <?php 
    }
    $_SESSION['seatno']=$s;
    $_SESSION['branch']=$b;
    $_SESSION['sem']=$q;
    $_SESSION['pattern']=$z;

 // header("Location: marksheet_template.php");
    //}
    // else
    // {
    //     echo "<h2>No Results Found</h2>";
    // }

    ?>
          </div>
    <table style="margin-bottom: 10%;">
     
    <tr>
      <td>
        <!-- <div class="row"> -->
            <!-- <div class="col-1"></div> -->
            <!-- <div class="col"> -->

    <table class="table" width="698"cellspacing="0"cellpadding="5" border="01" style="margin-top: 5%;">
            
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
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     
<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</t>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
   
    </div>
          
            
        </div>

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

          

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>

     <!-- <?php
             echo  '<pre>';
     print_r($_SESSION['seatno']);
     echo '</pre>'; ?>  -->