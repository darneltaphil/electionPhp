<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $err=array();
	  include ('access.clo');
  $sql="UPDATE `presetvoting`.`valid` SET `count` = count+1 ;";
	$exe=mysqli_query($dbc,$sql);
	 

	//process boys school prefect
  		if(isset($_POST["bsp"])){ 
	  		$bsp=(trim(strip_tags($_POST["bsp"])));
	 		$bsp =mysqli_real_escape_string($dbc,$bsp);
		 	$sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$bsp."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `bsp` = bsp+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `bsp` = bsp+1 ;";
			$exe=mysqli_query($dbc,$sql);}

	  //process girl school prefect
  		if(isset($_POST["gsp"])){ 
	  		$gsp=(trim(strip_tags($_POST["gsp"])));
	 		$gsp =mysqli_real_escape_string($dbc,$gsp);
		 	$sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$gsp."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `gsp` = gsp+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `gsp` = gsp+1 ;";
			$exe=mysqli_query($dbc,$sql);}

	  //process protocol
  		if(isset($_POST["prot"])){ 
	  		$prot=(trim(strip_tags($_POST["prot"])));
	 		$prot =mysqli_real_escape_string($dbc,$prot);
		 	$sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$prot."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `prot` = prot+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `prot` = prot+1 ;";
			$exe=mysqli_query($dbc,$sql);}

	  //process boys compound prefect
  		if(isset($_POST["bcp"])){ 
	  		$bcp=(trim(strip_tags($_POST["bcp"])));
	 		$bcp =mysqli_real_escape_string($dbc,$bcp);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$bcp."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `bcp` = bcp+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `bcp` = bcp+1 ;";
			$exe=mysqli_query($dbc,$sql);}


	  //process girls compound prefect
  		if(isset($_POST["gcp"])){ 
	  		$gcp=(trim(strip_tags($_POST["gcp"])));
	 		$gcp =mysqli_real_escape_string($dbc,$gcp);
		 	$sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$gcp."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `gcp` = gcp+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `gcp` = gcp+1 ;";
			$exe=mysqli_query($dbc,$sql);}
		
	
		  //process boys sports prefect
  		if(isset($_POST["bspt"])){ 
	  		$bspt=(trim(strip_tags($_POST["bspt"])));
	 		$bspt =mysqli_real_escape_string($dbc,$bspt);
			 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$bspt."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `bspt` = bspt+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `bspt` = bspt+1 ;";
			$exe=mysqli_query($dbc,$sql);}

		
				  //process girls sports prefect
  		if(isset($_POST["gspt"])){ 
	  		$gspt=(trim(strip_tags($_POST["gspt"])));
	 		$gspt =mysqli_real_escape_string($dbc,$gspt);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$gspt."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `gspt` = gspt+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `gspt` = gspt+1 ;";
			$exe=mysqli_query($dbc,$sql);}


		//process boys entertainment prefect
  		if(isset($_POST["bep"])){ 
	  		$bep=(trim(strip_tags($_POST["bep"])));
	 		$bep =mysqli_real_escape_string($dbc,$bep);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$bep."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `bep` = bep+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `bep` = bep+1 ;";
			$exe=mysqli_query($dbc,$sql);}
			
			
			//process girl entertainment prefect
  		if(isset($_POST["gep"])){ 
	  		$gep=(trim(strip_tags($_POST["gep"])));
	 		$gep =mysqli_real_escape_string($dbc,$gep);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$gep."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `gep` = gep+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `gep` = gep+1 ;";
			$exe=mysqli_query($dbc,$sql);}


				//process chaplain 
	  		if(isset($_POST["chaplain"])){ 
	  		$chaplain=(trim(strip_tags($_POST["chaplain"])));
	 		$chaplain =mysqli_real_escape_string($dbc,$chaplain);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$chaplain."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `chaplain` = chaplain+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `chaplain` = chaplain+1 ;";
			$exe=mysqli_query($dbc,$sql);}
			
			
			//process src
			if(isset($_POST["src"])){ 
	  		$src=(trim(strip_tags($_POST["src"])));
	 		$src =mysqli_real_escape_string($dbc,$src);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$src."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `src` = src+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `src` = src+1 ;";
			$exe=mysqli_query($dbc,$sql);}


			//process nurse
			if(isset($_POST["nurse"])){ 
	  		$nurse=(trim(strip_tags($_POST["nurse"])));
	 		$nurse =mysqli_real_escape_string($dbc,$nurse);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$nurse."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `nurse` = nurse+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `nurse` = nurse+1 ;";
			$exe=mysqli_query($dbc,$sql);}

			
			//process canteen
			if(isset($_POST["canteen"])){ 
	  		$canteen=(trim(strip_tags($_POST["canteen"])));
	 		$canteen =mysqli_real_escape_string($dbc,$canteen);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$canteen."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `canteen` = canteen+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `canteen` = canteen+1 ;";
			$exe=mysqli_query($dbc,$sql);}
			
			
			//process lib
			if(isset($_POST["lib"])){ 
	  		$lib=(trim(strip_tags($_POST["lib"])));
	 		$lib =mysqli_real_escape_string($dbc,$lib);
		 $sql="UPDATE `presetvoting`.`candidate` SET `score` = score+1 WHERE `candidate`.`id` ='".$lib."';";
			$exe=mysqli_query($dbc,$sql);
			$sql="UPDATE `presetvoting`.`valid` SET `lib` = lib+1 ;";
			$exe=mysqli_query($dbc,$sql);
			}else{ 
			$sql="UPDATE `presetvoting`.`control` SET `lib` = lib+1 ;";
			$exe=mysqli_query($dbc,$sql);}

$in_url = "thanks.php";
	//	echo "<script language='javascript' >window.location.href='$in_url'</script>"; 
		

mysqli_close($dbc);	

}//end of if method is POST
else{echo "kwasia try POST";}