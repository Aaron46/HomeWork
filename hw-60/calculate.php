<?php
    if(isset($_POST['amount'])) {
    #if(!empty($_POST['amount'])) { // empty checks that exists and is 0 or empty string
        if(! is_numeric($_POST['amount']) || $_POST['amount'] < .01) {
            die("Amount must be a number greater than 0");
        }
        $amount = $_POST['amount'];
    } else {
        #exit
        die("Amount is a required field");
    }

    if(isset($_POST['rate'])) {
    #if(!empty($_POST['rate'])) { // empty checks that exists and is 0 or empty string
        if(! is_numeric($_POST['rate']) || $_POST['rate'] < .01) {
            die("Rate must be a number greater than 0");
        }
        $rate = $_POST['rate'];
    } else {
        #exit
        die("Rate is a required field");
    }

    if(isset($_POST['years'])) {
    #if(!empty($_POST['years'])) { // empty checks that exists and is 0 or empty string
        if(! is_numeric($_POST['years']) || $_POST['years'] < 1) {
            die("Years must be a number greater than 0");
        }
        $years = $_POST['years'];
    } else {
        #exit
        die("Years is a required field");
    }

    $rateToUse = $rate * .01;
    $result = $amount;

    for($i = 0; $i < $years; $i++) {
        $result += $result * $rateToUse;
    }
    include "top.txt"
?>
<div>
    <div>
        <div class="well col-sm-2 text-right">Amount</div>
        <div class="col-sm-10 well">$<?= number_format($amount, 2) ?></div>
    </div>
    <div>
        <div class="well col-sm-2 text-right">Rate</div>
        <div class="col-sm-10 well"><?= number_format($rate, 2) ?></div>
    </div>
    <div>
        <div class="well col-sm-2 text-right">Years</div>
        <div class="col-sm-10 well"><?= number_format($years) ?></div>
    </div>
    <div>
        <div class="well col-sm-2 text-right">Result</div>
        <div class="col-sm-10 well">$<?= number_format($result, 2, ".", "") ?></div>
    </div>
</div>

<?php
    include "bottom.txt"
?>