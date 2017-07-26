
<?php
    $style = ".vertical {
        border-right: 1px solid #ccc;
    }";
    include 'top.php';
?>
<div class="row">
    <div class="col-md-2 vertical">
        <form>
            <h2>Filters</h2>
            <div class="form-group">
                <label for="categories">Sort by Category</label>
                <select class="form-control" id="categories"  name="category">
                    <?php foreach($category as $cat):?>
                        <option value="<?=$cat?>" <?php if(isset($theCat) && $theCat == $cat) echo "selected"?>><?=$cat?></option>
                    <?php endforeach ?>    
                </select>
            </div>
            
             <!-- <div class="form-group"> 
                 <div class="checkbox" name="">
                    <label for="author">
                    <input type="checkbox" value=""> Check me out
                    </label>
                    <label for="author">
                    <input type="checkbox" value=""> Check me out
                    </label><label for="author">
                    <input type="checkbox" value=""> Check me out
                    </label>
                </div>   -->
            <!-- </div> -->
            <button type="submit" class="btn btn-default" >Submit</button>
        </form>
    </div>

    <div class="col-md-10">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="sefer" class="col-sm-2 control-label">Select A Sefer</label>
                <div class="col-sm-10">
                <select class="form-control" id="sefer" name="sefer">
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
                <button type="submit" class="btn btn-primary">Get Info</button>
                </div>
            </div>
        </form>

        <?php if(!empty($selectedSefer)) : ?>
            <h2 class="text-center">
                <?= $selectedSefer['name'] ?> is $<?= number_format($selectedSefer['price'], 2) ?>
            </h2>
        <?php endif ?>

        <?php if(!empty($error)) : ?>
            <h2 class="text-center alert alert-danger">
                <?= $error ?>
            </h2>
        <?php  endif ;
        include 'bottom.php'
        ?>
    </div>
</div>
    