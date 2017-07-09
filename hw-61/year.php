<?php
     
    if(!empty($_GET["year"])){
        $year = $_GET["year"];
    }
    else{
        $year = 2017;
    };
    if(!empty($_GET["month"])){
        $month = $_GET["month"]; 
    }
    function isLeapY($years){
        if(($years % 4)== 0 && (($years % 100)!=0 || ($years % 2000)== 0)){
            echo "$years is a leap year and has 366 days.";
        }
        else{
            echo "$years is not a leap year and has only 365 days.";
        }
    }
    $dims = [
        ["January",31],
        ["February",28],
        ["March",31],
        ["April",30],
        ["May",31],
        ["June",30],
        ["July",31],
        ["August",31],
        ["September",30],
        ["October",31],
        ["November",30],
        ["December",31]
     ];
    foreach($dims as $dim):
        if($dim[0] === $month){
            if(($year % 4) != 0 || (($year % 100) == 0 && ($year % 2000)!= 0)){
              $value = $dim[1];
            }
            else{
                    if($dim[0] !== "February"){
                        $value = $dim[1];
                    }
                    elseif($dim[0]  === "February"){
                        $value = 29;
                    } 
            }
        }    
     endforeach;
    include "top.php";
    
    
?> 
<div class="row">
    <div class="col-md-12">
        <p> YEAR: </p>
        <div class="well"><?php echo   $year;?></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p> MONTH: </p> 
        <div class="well"><?php echo $month;?></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p> DAYS IN MONTH: </p> 
        <div class="well"><?php echo $value ?></div>
     </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p> MONTH: </p> 
        <div class="well"><?php echo isLeapY($year);?></div>
    </div>
</div>
<?php
    include "bottom.php";
?>    