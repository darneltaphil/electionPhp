<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php   ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php echo "PRESET ELECTION 2018 - ".date('Y').""; ?></title>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-png" />
<link rel='stylesheet'  type='text/css' href='css/main.css' />
<link rel='stylesheet'  type='text/css' href='css/theme.css' />
<link rel='stylesheet'  type='text/css' href='css/jquery-confirm.min.css' />
<link rel='stylesheet'  type='text/css' href='css/animation.css' />
<link rel='stylesheet'  type='text/css' href='css/fontawesome.css' />
<div class="container-fluid">
  <div class="row">

    <?php  include ('access.clo');
         $getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT count FROM valid "));
          $vote=$getvalidvote[0];
        if($vote==0){
          echo "<div class='display-4 d-flex'>No Votes casted</div>";
     }
    else{

    $sql='SELECT * FROM `position`';
    $result=mysqli_query($dbc,$sql);
        while($row=mysqli_fetch_array($result)){
          $position=$row['position_shortname'];
          $getvalidvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $position FROM `valid` "));
          $validvote=$getvalidvote[0];
          $getneutralvote=mysqli_fetch_row(mysqli_query($dbc,"SELECT $position FROM `control` "));
          $neutralvote=$getneutralvote[0];
      ?>


    <div class="col-xl-4 col-lg-4 col-md-6 mb-1 shadow-5 ">
    <div class="card ">
        <div class=" card-header bg-gradient-primary text-white">
                <div class="col-xl-12 col-lg-12"> <?php echo $row['position_fullname'] ?></div>
        </div>

        <div class="card-body">
            <div class="row ">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">Valid Votes: <?php echo $validvote;?></div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">Neutral Votes: <?php echo $neutralvote;?></div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">Total Votes: <?php echo intval($neutralvote) + intval($validvote);?></div>
            </div>

            <div class="col-xl-12 col-lg-12">
      <?php
             $req="SELECT * FROM `candidate` WHERE `post`='$position' AND `year`='".date('Y')."'";
            $exe=mysqli_query($dbc,$req);
      while($row=mysqli_fetch_array($exe,MYSQLI_BOTH)){ 	?>
            <div class='row'>
              <div class="col-xl-2 col-lg-2 col-md-2  col-sm-2"><?php echo "<img src=pics/".date('Y')."/".$row['id'].".jpg width='50px' height='63px' style='vertical-align:middle;'>"?></div>
              <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6" style='vertical-align:middle;'><?php echo $row[1];?></div>
              <div class="col-xl-1 col-lg-1 col-md-1  col-sm-1" style='vertical-align:middle;'><?php echo $row['score'];?></div>
              <div class="col-xl-3 col-lg-3 col-md-3  col-sm-3" style='vertical-align:middle;'><?php echo $validvote!=0 ? (round( ($row['score']*100/$validvote) ,2) )."%":'0'."%";?></div>
            </div>
      <?php }   ?>

            </div>
        </div>
    </div>


    </div>
    <?php }  } ?>
  </div>

</div>

