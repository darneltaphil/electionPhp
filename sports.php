<div class="card">
    <div class=" card-header bg-gradient-primary text-white">
            <div class="col-xl-12 col-lg-12 display-4 "> SPORTS PREFECT</div>
    </div>
    <div class="card-body">
        <div class="row">
                <?php 
                $exe=mysqli_query($dbc, "SELECT * FROM candidate WHERE candidate.post='spt' and candidate.year=".date('Y')."");
               $c=mysqli_num_rows($exe);
                while($row=mysqli_fetch_assoc($exe)){    
                    echo '<div class="col-xl-'. 12/$c.' col-lg-'. 12/$c.'  col-md-'. 12/$c.'">';
                    echo '<label><img name="" src="pics/'.date("Y").'/'.$row['id'].'.jpg" width="200" height="200" alt="" style="background-color: #00CCFF" /><br />';
                    echo $row['fullname'].'<br>';
                    echo '<input type="radio" style="width:50px;" name="spt" value="'.$row['id'].'" />';
                    echo '</label></div>';
                 }?>
        </div>
    </div>

    <!-- <div class=" card-header bg-gradient-primary text-white">
            <div class="col-xl-12 col-lg-12 display-4 "> GIRLS' SPORTS PREFECT</div>
    </div>
    <div class="card-body">
        <div class="row">
        
        <?php 
                $exe=mysqli_query($dbc, "SELECT * FROM candidate WHERE candidate.post='gspt' and candidate.year=".date('Y')."");
               $c=mysqli_num_rows($exe);
                while($row=mysqli_fetch_assoc($exe)){    
                    echo '<div class="col-xl-'. 12/$c.' col-lg-'. 12/$c.'  col-md-'. 12/$c.'">';
                    echo '<label><img name="" src="pics/'.date("Y").'/'.$row['id'].'.jpg" width="200" height="200" alt="" style="background-color: #00CCFF" /><br />';
                    echo $row['fullname'].'<br>';
                    echo '<input type="radio" style="width:50px;" name="gspt" value="'.$row['id'].'" />';
                    echo '</label></div>';
                 }?>
            
        </div> 
    </div> -->
</div>