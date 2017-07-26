<?php
    include 'top.php'
?>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" id="name" name="name" value="<?php if(!empty($_POST['name'])) echo $_POST['name'] ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label for="category" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10">
                <input class="form-control" id="category" name="category" value="<?php if(!empty($_POST['category'])) echo $_POST['category'] ?>"/>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" step=".01" id="price" name="price"value="<?php if(!empty($_POST['price'])) echo $_POST['price'] ?>"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Add Sefer</button>
            </div>
        </div>
        <input type="hidden" name="hiddenData" value="You cant see me" />
    </form>

    <?php if(!empty($selectedSefer)) : ?>
        <h2 class="text-center">
            <?= $selectedSefer['name'] ?> is $<?= number_format($selectedSefer['price'], 2) ?>
        </h2>
    <?php endif ?>

    <?php if(!empty($errors)) : ?>
        <h2 class="text-center alert alert-danger">
            <ul>
                <?php foreach($errors as $error) :?>
                <li><?= $error ?></li>
                <?php endforeach ?>
            </ul>
        </h2>
    <?php elseif(!empty($name)) :?>
        <h2 class="text-center text-success">Sefer successfully added</h2>
    <?php
    endif; 
include 'bottom.php'
?>
