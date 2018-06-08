<?php
 function eighty($x)
	{
		# code...
		if(is_numeric($x)){
		$res = ($x/80)*100;
		return(grade($res));

	}
	else
	{
		return "-";
	}

}

function twenty($x){
	if(is_numeric($x)){
		$res = ($x/20)*100;
		return(grade($res));

	}
	else
	{
		return "-";
	}
}

function twentyfive($x){
	if(is_numeric($x)){
		$res = ($x/25)*100;
		return(grade($res));

	}
	else
	{
		return "-";
	}
}

function hundred($x){
	if(is_numeric($x)){
		$res = $x;
		return(grade($res));

	}
	else
	{
		return "-";
	}
}

function grade($res){

	if ($res >=80 ) {
			# code...
			return "O";
		}
		elseif ($res<80 && $res>=75) {
			# code...
			return "A";
		}
		elseif ($res<75 && $res>=70) {
			# code...
			return "B";
		}
		elseif ($res<70 && $res>=60) {
			# code...
			return "C";
		}
		elseif ($res<60 && $res>=50) {
			# code...
			return "D";
		}
		elseif ($res<50 && $res>=45) {
			# code...
			return "E";
		}
		elseif ($res<45 && $res>=40) {
			# code...
			return "P";
		}
		elseif($res<40){
			return "F";
		}
		else{
			return "-";
		}

}


?>



<!-- denominators to be taken

20 ia
25 tw,op,oral

theory:
40
50
60
75
80
100
 -->
