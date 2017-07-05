<?php
 include "top.txt";
?>
<form class="form-horizontal" action="calculate.php" method="post">
            <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Amount</label>
                <div class="col-sm-10">
                    <input type="number" min=".01" step=".01" class="form-control" id="amount" name="amount" placeholder="Amount" xrequired>
                </div>
            </div>
            <div class="form-group">
                <label for="rate" class="col-sm-2 control-label">Rate</label>
                <div class="col-sm-10">
                    <input type="number" min=".01" step=".01" class="form-control" id="rate" name="rate" placeholder="Rate" required>
                </div>
            </div>
            <div class="form-group">
                <label for="years" class="col-sm-2 control-label">Years</label>
                <div class="col-sm-10">
                    <input type="number" min="1" step="1" class="form-control" id="years" name="years" placeholder="Years" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </div>
        </form>

<?php
 include "bottom.txt";
?>  