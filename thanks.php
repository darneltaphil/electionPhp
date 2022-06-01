<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thank you</title>
<link rel='stylesheet'  type='text/css' href='css/main.css' />
<link type='text/javascript' href='js/javascript.jsp' />
<link rel='shortcut icon' href='favicon.ico' />

</head>

<body>
<br /><br /><BR /><br /><br /><BR /><center>
<script>//window.setTimeout(function(){
        // Move to a new location or you can do something else
       // window.location.href = "index.php";},15000);
       </script>
        
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>


<div class="content" style="background-color:rgba(215,255,170,0.5);	box-shadow: 0px 0px 57px  0px #000;
			border-radius:15px 15px 15px 15px;
			-moz-border-radius:0 0 15px 15px;
			-webkit-border-radius: 15px 15px 15px 15px;
font-family:proxima; font-size:84px; text-align:center; color:#206c17; width:700px; padding-bottom:50px;">Thank You !!! <br /><br /> <span id='timer'></span><br /><BR /><font size="+3"> You may leave your console<br /></font></div>	</center>
</body>
</html>
<script>
	//define your time in second
		var c=5;
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
				window.location="index.php";
			}
            c = c - 1;
            t = setTimeout(function()
			{
			 timedCount()
			},
			1000);
        }
	</script>