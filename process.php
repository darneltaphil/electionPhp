<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $err=array();
	  include ('access.clo');
  	$sql_count="UPDATE `valid` SET `count` = count+1 ;";
	$exe_count=mysqli_query($dbc,$sql_count);
	 
		$sql='SELECT * FROM `position`';
		$result=mysqli_query($dbc,$sql);
	while($row=mysqli_fetch_array($result)){
		if(isset($_POST[$row['position_shortname']])){ 
			$position=$_POST[$row['position_shortname']];
			$position_name=$row['position_shortname'];
		   //$bsp =mysqli_real_escape_string($dbc,$bsp);
			$sql="UPDATE `candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$position."';";
		  	$exe=mysqli_query($dbc,$sql);
		  	$sql="UPDATE `valid` SET $position_name = $position_name +1 ;";
		  	$exe=mysqli_query($dbc,$sql);
		  	}
			  else{ 
		  	$sql="UPDATE `control` SET ".$row['position_shortname']." = ".$row['position_shortname']." +1 ;";
		  	$exe=mysqli_query($dbc,$sql);
			}
	}
}