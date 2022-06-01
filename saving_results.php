<?php $page_title="..:: PRESET ELECTIONS 2017 ::..";  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<title><?php echo $page_title; ?></title>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-png" />
<link rel='stylesheet'  type='text/css' href='css/main.css' />
<link href="css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/datetime.js"></script>
</head> 
<body>
<div class="topbar" >
<div style="display:table-cell; color:#fff; text-align:right; background: ; padding-right:10px; vertical-align:middle;">
<div id="date_time" style=" display:inline"><script type="text/javascript">window.onload = date_time('date_time');</script></div></div>
<style> #result{background-color: #006;font-family:proxima; font-size:20px;; text-align:center; color:#fff; padding:5px; margin:0px;}</style>	
</div>&nbsp;
<div id="wrapper">
 <?php  include ('access.clo');   
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT count FROM valid "));
		 $vote=$getvalidvote[0];
		if($vote==0){

?>
 <center>
 <img src="img/1.png" width="800" height="265" />
  <br />
  <img src="img/loading.gif" width="331" height="331" />
  <br />
  <img src="img/Picture2.png" width="700" height="110" />
 </center>
<?php }
else{ 
  ?>
<div id="content">
<div id="tablerow">
    	<div id="cell">
		BOYS POSITIONS
		</div>
        
        <div id="cell">
    	GIRLS POSITIONS    
        </div>
        
        <div id="cell">
        OTHER POSITIONS
        </div>
    </div>
    <?php ////////////SCHOOL PREFECT      AND SRC  //////////////////// ?>
	<div id="tablerow">
    	<div id="cell">
		<table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Boys' School Prefect</div></th>
  </tr>
 <?php  include ('access.clo');   
 $cat='bsp';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
		</div>
        
        <div id="cell">
    	<table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Girls' School Prefect</div></th>
  </tr>
 <?php     
 $cat='gsp';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>    
        </div>
        
        <div id="cell">
        <table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">SRC</div></th>
  </tr>
 <?php     
 $cat='src';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
        </div>
    </div>
    
    <?php /////////////COMPOUND PEFECTS   AND CANTEEN/////////////////// ?>
    <div id="tablerow">
    	<div id="cell">
		<table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Boys' Compound Prefect</div></th>
  </tr>
 <?php     
 $cat='bcp';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
		</div>
        
        <div id="cell">
        <table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Girls Compound Prefect</div></th>
  </tr>
 <?php     
 $cat='gcp';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
        </div>
        
        <div id="cell">
        <table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Protocol</div></th>
  </tr>
 <?php     
 $cat='prot';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
        </div>
    </div>
    <?php ////////////SPORTS PREFECTS   AND NURSE//////////////////// ?>
    <div id="tablerow">
    	<div id="cell">
		<table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Boys' Sports Prefect</div></th>
  </tr>
 <?php     
 $cat='bspt';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
		</div>
        
        <div id="cell">
        <table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Girls' Sports Prefect</div></th>
  </tr>
 <?php     
 $cat='gspt';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
        </div>
        
        <div id="cell">
		<table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">School Nurse</div></th>
  </tr>
 <?php     
 $cat='nurse';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
		</div>
    </div>
    <?php ////////////ENTERTAINMENT PREFETS  CHAPLAIN  AND  LIBRARY//////////////////// ?>
    <div id="tablerow">
    	<div id="cell">
		<table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Boys' Entertainment Prefect</div></th>
  </tr>
 <?php     
 $cat='bep';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
		</div>
        
        <div id="cell">
        <table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Girls' Entertainment Prefect</div></th>
  </tr>
 <?php     
 $cat='gep';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table>
        </div>
       
       
       <div id="cell">
				<table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Library Prefect</div></th>
  </tr>
<?php /*?> <?php     
 $cat='lib';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?><?php */?>
</table>

		   
	<?php /*?>	   <table width="80%" border="0">
  <tr>
    <th scope="col" colspan="4"><div id="result">Chaplain Prefect</div></th>
  </tr>
 <?php     
 $cat='chaplain';
 		$getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM valid "));
		$validvote=$getvalidvote[0];
		$getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $cat FROM control "));
		$neutralvote=$getneutralvote[0];
		 ?>
        <tr>
    <td colspan="4">&nbsp;Valid Votes:&nbsp;&nbsp;<?php echo $validvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Neutral Votes:&nbsp;&nbsp;<?php echo $neutralvote;   ?>&nbsp;&nbsp;&nbsp;&nbsp;
    					  Total Votes:&nbsp;&nbsp;<?php echo $neutralvote+$validvote;   ?></td>
  </tr>
        <?php
        $req="SELECT * FROM `candidate` WHERE `post`='$cat' ";
		$exe=mysqli_query($dbc,$req);
		$i=0; 
	while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?> 
  <tr>
    <td>&nbsp;<?php echo "<img src=pics/2020/".$row[3].".jpeg width=50px height=63px style='vertical-align:middle;'>".$row[1];?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo @round((@$row[4]*@100/$validvote),2)."%";?></td>
    <td style='vertical-align:middle;'>&nbsp;<?php echo $row[4];?></td>
    <td>&nbsp;</td>
  </tr>  
<?php $i++;}   ?>
</table><?php */?>


	  </div>
    </div>
    
    
</div>
<?php } ?>
<script>
	//define your time in second
		var c=60;
        var t;
        timedCount();
 
        function timedCount()
		{
 
        	var hours = parseInt( c / 3600 ) % 24;
        	var minutes = parseInt( c / 60 ) % 60;
        	var seconds = c % 60;
 
        	var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);
 
            
        	$('#timer').html(result);
            if(c == 0 )
			{
            	//setConfirmUnload(false);
                //$("#quiz_form").submit();
				window.location="results.php";
			}
            c = c - 1;
            t = setTimeout(function()
			{
			 timedCount()
			},
			1000);
        }
	</script>
    
</div></body></html>