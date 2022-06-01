<div class="card">
    <div class=" card-header bg-gradient-primary text-white">
            <div class="col-xl-12 col-lg-12 display-4 "> COMPOUND PREFECT</div>
    </div>
    <div class="card-body">
        <div class="row">
                <?php 
                $exe=mysqli_query($dbc, "SELECT * FROM candidate WHERE candidate.post='cp' and candidate.year=".date('Y')."");
               $c=mysqli_num_rows($exe);
                while($row=mysqli_fetch_assoc($exe)){    
                    echo '<div class="col-xl-'. 12/$c.' col-lg-'. 12/$c.'  col-md-'. 12/$c.'">';
                    echo '<label><img name="" src="pics/'.date("Y").'/'.$row['id'].'.jpg" width="200" height="200" alt="" style="background-color: #00CCFF" /><br />';
                    echo $row['fullname'].'<br>';
                    echo '<input type="radio" style="width:50px;" name="cp" value="'.$row['id'].'" />';
                    echo '</label></div>';
                 }?>
        </div>
    </div>

    <!-- <div class=" card-header bg-gradient-primary text-white">
            <div class="col-xl-12 col-lg-12 display-4 "> GIRLS' COMPOUND PREFECT</div>
    </div>
    <div class="card-body">
        <div class="row">
        
        <?php 
                $exe=mysqli_query($dbc, "SELECT * FROM candidate WHERE candidate.post='gcp' and candidate.year=".date('Y')."");
               $c=mysqli_num_rows($exe);
                while($row=mysqli_fetch_assoc($exe)){    
                    echo '<div class="col-xl-'. 12/$c.' col-lg-'. 12/$c.'  col-md-'. 12/$c.'">';
                    echo '<label><img name="" src="pics/'.date("Y").'/'.$row['id'].'.jpg" width="200" height="200" alt="" style="background-color: #00CCFF" /><br />';
                    echo $row['fullname'].'<br>';
                    echo '<input type="radio" style="width:50px;" name="gcp" value="'.$row['id'].'" />';
                    echo '</label></div>';
                 }?>
            
        </div> 
    </div> -->
</div>