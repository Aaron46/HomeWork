
<?php
     include 'top.html'
?>
<div class="row">
    <form class="form-horizontal"  method="post">
        <div class="form-group">
            <label for="sefer" class="col-sm-2 control-label">Delete A Sefer</label>
            <div class="col-sm-10">
            <select class="form-control" id="sefer" name="deleteSefer" >
                    <?php foreach($seforim as $sefer) :?>
                    <option value="<?= $sefer['id'] ?>"
                    <?php if (!empty($selectedSefer) && $sefer['id'] == $selectedSefer['id']) echo "selected" ?>
                    ><?= $sefer["name"] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </form>
</div>
<?php if(!empty($selectedSefer)) : ?>
    <h2 class="text-center">
        <?= $selectedSefer['name'] ?> is $<?= number_format($selectedSefer['price'], 2) ?>
    </h2>
<?php endif ?>

<?php if(!empty($error)) : ?>
    <h2 class="text-center alert alert-danger">
        <?= $error ?>
    </h2>
<?php   endif;
 include 'bottom.php'
?>