<?php
include 'trial.php';
?>
<!DOCTYPE html>



        <!-- Main content -->
        <section class="content">
		
		<br />
<!-- <b>Notice</b>:  Undefined index: sgpi in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>34</b><br />
<br />
<b>Notice</b>:  Undefined index: cgpi in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>35</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_grade_ese in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>52</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_grade_op in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>53</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_grade_or in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>54</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_grade_ia in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>55</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_grade_tw in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>56</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_overall_ese in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>57</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_overall_tw in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>58</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_creditsearned_th in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>59</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_creditsearned_tw in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>60</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_gradepoints_th in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>61</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_gradepoints_tw in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>62</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_cxg_th in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>63</b><br />
<br />
<b>Notice</b>:  Undefined index: ob_cxg_tw in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>64</b><br />-->

<?php 
$sem = $_POST['sem'];


$branch=$_POST['branch'];
$pattern=$_POST['pattern'];
?>

<div>
<form method="POST" action="insertvaluerev.php">
 <center>
   BRANCH : <?php
    echo $branch;
	 echo '   ';
    ?>

SEM : <?php
    echo $sem;
    ?> 

PATTERN :: <?php
    echo $pattern;
    ?>
  </center>  
  <br>


<!-- <center>
<p>Seat Number : <br />
<b>Notice</b>:  Undefined index: seat in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>74</b><br />
<br><br>Passing Year : <br />
<b>Notice</b>:  Undefined index: year in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>77</b><br />
<br><br>Elective Name : <br />
<b>Notice</b>:  Undefined index: elective in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>82</b><br />
<br />
<b>Notice</b>:  Undefined index: elective in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>83</b><br />
<br><br>No of Attempts : <br />
<b>Notice</b>:  Undefined index: passinone in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>87</b><br />
More than One Attempt<br><br>Remark : <br />
<b>Notice</b>:  Undefined index: remark in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>100</b><br />
<br />
<b>Notice</b>:  Undefined index: remark in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>101</b><br />
</p><br><br />
<b>Notice</b>:  Undefined index: passinone in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>108</b><br />
<br />
<b>Notice</b>:  Undefined index: seat in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>109</b><br />
<br />
<b>Notice</b>:  Undefined index: year in <b>C:\xaamp\htdocs\transcript\student\confirmvaluerev.php</b> on line <b>110</b><br />-->

<div class="table-responsive box box-body">
<table  class="table" border="1">
	<tr>
		<td rowspan="3"> SUBJECTS</td>
		<td colspan="2"> COURSE CREDITS</td>
		<td colspan="7">GRADE</td>
		<td colspan="2">CREDITS EARNED (C)</td>
		<td colspan="2">GRADE POINTS (G)</td>
		<td colspan="2">C X G</td>
	</tr>
            
	<tr>
		<td rowspan="2">TH</td>
		<td rowspan="2">TW/P</td>
		
		<td rowspan="2">ESE</td>
		<td rowspan="2">OP</td>
		<td rowspan="2">OR</td>
		<td rowspan="2">IA</td>
		<td rowspan="2">TW</td>
		<td rowspan="1" colspan="2">OVERALL</td>
		
		<td rowspan="2">TH</td>
		<td rowspan="2">TW/P</td>
		<td rowspan="2">TH</td>
		<td rowspan="2">TW</td>
		<td rowspan="2">TH</td>
		<td rowspan="2">TW</td>
	</tr>
	<tr>
		<td>ESE</td>
		<td>TW</td>
	</tr>
            
<!--<tr><td>Cloud Computing Laboratory</td><td>-</td><td>1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Data Warehouse and Mining</td><td>4</td><td>1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Elective - III</td><td>4</td><td>1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Human Machine Interaction</td><td>4</td><td>1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Parallel and Distributed Systems</td><td>4</td><td>1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Project - II</td><td>-</td><td>6</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> -->

<tr>
		<td></td>
		<td colspan="2">27</td>
		<td colspan="7">-</td>
		<td colspan="2">0</td>
		<td colspan="2">-</td>
		<td colspan="2">0</td>
</tr>
<?php 
$i=0;

$sql="select * from course_table_rev where sem=".$sem." and branch='".$branch."' and pattern='".$pattern."'";
//echo $sql;
$result=mysqli_query($connect,$sql);
//$sub_num=mysqli_num_rows($result);

//$_SESSION['sub_num']=$sub_num;

while($row=mysqli_fetch_array($result))
{
	$coursetable_array[$i][0]=$row['subject'];//subject
	$main_array[$i][0]=$row['subject'];
	//echo $row['subject'];
	$sqlob="select * from student_marks_rev where subject='".$row['subject']."' and roll='".$roll."'";
	//echo $sqlob;
	$resultob=mysqli_query($connect,$sqlob);
	$num_resultob=mysqli_num_rows($resultob);
	
	//If marks are not entered previously then initialize all data cells to 0.
	if($num_resultob==0)
	{
		$seat="";
		$year="";
		$ob_grade_ese[$i]="";
		$ob_grade_op[$i]="";
		$ob_grade_or[$i]="";
		$ob_grade_ia[$i]="";
		$ob_grade_tw[$i]="";
		$ob_overall_ese[$i]="";
		$ob_overall_tw[$i]="";
		$ob_creditsearned_th[$i]="";
		$ob_creditsearned_tw[$i]="";
		$ob_gradepoints_th[$i]="";
		$ob_gradepoints_tw[$i]="";
		$ob_cxg_th[$i]="";
		$ob_cxg_tw[$i]="";
	}
	
	//If marks are previously entered, then fetch them into this array
	while($rowob=mysqli_fetch_array($resultob))
	{
		$seat=$rowob['seat'];
		$year=$rowob['year'];
		
		$ob_grade_ese[$i]=$rowob['grade_ese'];
		$ob_grade_op[$i]=$rowob['grade_op'];
		$ob_grade_or[$i]=$rowob['grade_or'];
		$ob_grade_ia[$i]=$rowob['grade_ia'];
		$ob_grade_tw[$i]=$rowob['grade_tw'];
		$ob_overall_ese[$i]=$rowob['overall_ese'];
		$ob_overall_tw[$i]=$rowob['overall_tw'];
		$ob_creditsearned_th[$i]=$rowob['creditsearned_th'];
		$ob_creditsearned_tw[$i]=$rowob['creditsearned_tw'];
		$ob_gradepoints_th[$i]=$rowob['gradepoints_th'];
		$ob_gradepoints_tw[$i]=$rowob['gradepoints_tw'];
		$ob_cxg_th[$i]=$rowob['cxg_th'];
		$ob_cxg_tw[$i]=$rowob['cxg_tw'];
	}
	//Init the course_table details in coursetable_array
	$coursetable_array[$i][1]=$row['coursecredits_th'];//coursecredits_th
	$coursetable_array[$i][2]=$row['coursecredits_tw'];//coursecredits_tw
	$coursetable_array[$i][3]=$row['grade_ese'];
	$coursetable_array[$i][4]=$row['grade_op'];
	$coursetable_array[$i][5]=$row['grade_or'];
	$coursetable_array[$i][6]=$row['grade_ia'];
	$coursetable_array[$i][7]=$row['grade_tw'];
	//echo $main_array[$i][0];
	
	$i++;
}?>
<div>

<form method="POST" width="50%"  action="confirmvaluerev.php">
	    <center>
   BRANCH : <?php
    echo $branch;
	 echo '   ';
    ?>

SEM : <?php
    echo $sem;
    ?> 

PATTERN :: <?php
    echo $pattern;
    ?>
  </center>  
  <br>
<center>
  
    SEAT NO <input type="text" class="form-control" name='seat' placeholder="Enter Seat Number" required >
   </center>
<br>
<?php $seat=$_POST['$seat'];?>
   <center>
    YEAR <input type="text" class="form-control" name='year' placeholder="Year of Passing (May 2013)" value="<?php echo $year;?>" required >
   </center>
   <br>


   <?php
   if($sem=='7'||$sem=='8')
   {  ?>   
	<center>
  
    Elective <input type="text" class="form-control" name='elective' placeholder="Elective Name (As will appear on marksheet)" required >
   </center>
   <br>';
   <?php }
?>  
   <center>
  
  	Pass attempts <select class="form-control" name="passinone">
  		<option value="1">Pass in One Attempt</option>
  		<option value="0">More than One Attempt</option>
     </select>
   </center>
<br>

<?php


   if ($sem%2==0)
   { ?>
	  
   <center>
  
   Remark for Year <input type="text" class="form-control" name="remark" placeholder="Remark for Year (SUCCESSFUL/ UNSUCCESSFUL)" required >
  </center>
   <br>
  <?php } ?>
  
   <br>
<b><center> Note: Enter - into field, which is not applicable<center></b><br>

<div class="table-responsive box box-body">
<table  class="table" border="1">

            
            
            
            <tr>
                <td rowspan="3"> SUBJECTS</td>
                <td colspan="2"> COURSE CREDITS</td>
                <td colspan="7">GRADE</td>
				<td colspan="2">CREDITS EARNED (C)</td>
				<td colspan="2">GRADE POINTS (G)</td>
				<td colspan="2">C X G</td>
            </tr>
            
            <tr>
				<td rowspan="2">TH</td>
				<td rowspan="2">TW/P</td>
			    
				<td rowspan="2">ESE</td>
				<td rowspan="2">OP</td>
				<td rowspan="2">OR</td>
				<td rowspan="2">IA</td>
				<td rowspan="2">TW</td>
				<td rowspan="1" colspan="2">OVERALL</td>
				
				<td rowspan="2">TH</td>
				<td rowspan="2">TW/P</td>
				<td rowspan="2">TH</td>
				<td rowspan="2">TW</td>
				<td rowspan="2">TH</td>
				<td rowspan="2">TW</td>
            </tr>
			<tr>
				<td>ESE</td>
				<td>TW</td>
			</tr>
<?php
for($j=0;$j<$i;$j++)
{
	
	echo '<tr>';
	
	echo '<td>'.$coursetable_array[$j][0].'</td>'; //SUBJECT
	echo '<td>'.$coursetable_array[$j][1].'</td>'; //CREDITS TH
	echo '<td>'.$coursetable_array[$j][2].'</td>'; //CREDITS TW
	
	
	if($coursetable_array[$j][3]=="-")
	{
		echo '<td><input style="width:30px" name="ob_grade_ese[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px"  name="ob_grade_ese[]" type="text" value="'.$ob_grade_ese[$j].'" required></input></td>';
	}
	
	if($coursetable_array[$j][4]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_grade_op[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_op[]" type="text" value="'.$ob_grade_op[$j].'" required></input></td>';
	}
	
	if($coursetable_array[$j][5]=="-")
	{
		echo '<td><input style="width:30px" name="ob_grade_or[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_or[]" type="text" value="'.$ob_grade_or[$j].'" required></input></td>';
	}
	
	if($coursetable_array[$j][6]=="-")
	{
		echo '<td><input style="width:30px" name="ob_grade_ia[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_ia[]" type="text" value="'.$ob_grade_ia[$j].'" required></input></td>';
	}
	if($coursetable_array[$j][7]=="-")
	{
		echo '<td><input style="width:30px" name="ob_grade_tw[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_grade_tw[]" type="text" value="'.$ob_grade_tw[$j].'" required></input></td>';
	}
	//OVERALL ESE AND TW
	echo '<td><input style="width:30px" name="ob_overall_ese[]" type="text" value="'.$ob_overall_ese[$j].'" required></input></td>';
	echo '<td><input style="width:30px" name="ob_overall_tw[]" type="text" value="'.$ob_overall_tw[$j].'" required></input></td>';
	
	if($coursetable_array[$j][1]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_creditsearned_th[]" type="text" value="-" readonly></input></td>';
		
	}
	else
	{
		echo '<td><input style="width:30px"  name="ob_creditsearned_th[]" type="text" value="'.$ob_creditsearned_th[$j].'" required></input></td>';
		
	}
	if($coursetable_array[$j][2]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_creditsearned_tw[]" type="text" value="-" readonly></input></td>';
		
	}
	else
	{
		echo '<td><input style="width:30px"  name="ob_creditsearned_tw[]" type="text" value="'.$ob_creditsearned_tw[$j].'" required></input></td>';
		
	}
	if($coursetable_array[$j][1]=="-")
	{
		
		echo '<td><input  style="width:30px" name="ob_gradepoints_th[]" type="text" value="-" readonly></input></td>';
		
	}
	else
	{
		
		echo '<td><input style="width:30px" name="ob_gradepoints_th[]" type="text" value="'.$ob_gradepoints_th[$j].'" required></input></td>';
	} echo '.$ob_gradepoints_th[$j].';
	if($coursetable_array[$j][2]=="-")
	{
		echo '<td><input  style="width:30px" name="ob_gradepoints_tw[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		echo '<td><input style="width:30px" name="ob_gradepoints_tw[]" type="text" value="'.$ob_gradepoints_tw[$j].'" required></input></td>';
	}
	if($coursetable_array[$j][1]=="-")
	{
		
		echo '<td><input  style="width:30px" name="ob_cxg_th[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		
		echo '<td><input style="width:30px" name="ob_cxg_th[]" type="text" value="'.$ob_cxg_th[$j].'" required></input></td>';
	}
	if($coursetable_array[$j][2]=="-")
	{
		
		echo '<td><input  style="width:30px" name="ob_cxg_tw[]" type="text" value="-" readonly></input></td>';
	}
	else
	{
		
		<?php echo ?> <input style="width:30px" name="ob_cxg_tw[]" type="text" value="'.$ob_cxg_tw[$j].'" required /input>;
	}
	//echo '<td><input style="width:30px" name="ob_creditsearned_th[]" type="text" value="'.$ob_creditsearned_th[$j].'" ></input></td>';
	//echo '<td><input style="width:30px" name="ob_creditsearned_tw[]" type="text" value="'.$ob_creditsearned_tw[$j].'" ></input></td>';
	
	
	
	
	
	
	
	echo '</tr>';
}




</table><br><br></div>
<br>
<center><input type="submit" class="btn bg-navy" value="Submit" name="submit">
</form>
</div> 

		
		
		
		
		
		  </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     

      


		 <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
       <script src="../bootstrap/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
  </body>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
		<footer class="main-footer">
        <!-- To the right -->
        
        <!-- Default to the left -->
        