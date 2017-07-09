<?php
    function getYear() {
        
        for($x = 1;$x <= 2017;$x++){
            $z = $x;
            echo "<option>$z</option> ";
        }   
        
}

    function getMonth(){
        $months = "January,February,March,April,May,June,July,August,September,October,November,December";
        $month = explode(",", $months);
        for ($x = 0; $x <12; $x++) {
            echo "<option>$month[$x]</option> " ;
        } 
    };
    include "top.php";
?>

    <form class="form-inline" action="year.php">
        <div class="row">
            <div class="col-md-6 text-center">    
                <div class="form-group">
                    <label for="selectYear">Year</label>
                    <select class="form-control" id="year" name="year" value="">
                        <?php echo  getYear();?>
                    </select>
                </div>
            </div>
            <div class="col-md-6 text-center"> 
                <div class="form-group">
                    <label for="selctMonth">Month</label>
                    <select class="form-control" id="month" name="month" value="">
                        <?php echo  getMonth();?>
                    </select>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12 text-center"> 
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Find Out!</button>
                </div>
            </div>
        </div>
        </form>
    
    
<?php
    include "bottom.php";
?> 