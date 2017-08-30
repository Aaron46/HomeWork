<?php
    //include 'housesModel.php';
            if ($currentpage > 1) {
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
            $prevpage = $currentpage - 1;
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
            } 

            $range = 1;
            for ($x = ($currentpage - $range); $x < (($currentpage + $range)  + 1); $x++) {
            if (($x > 0) && ($x <= $totalPages)) {
                if ($x == $currentpage) {
                    echo " [<b>$x</b>] ";
                } else {
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
                } 
            }
            }      
    $styles = "
        .house img {
        width: 206px;
        height: 150px;
        }
        .cheap {
            color: red;
        }
        .cheap::before {
            content: \"ONLY \";
        }
        .cheap::after {
            content: \" !!\"
        }
    ";
    include 'top.php';
?>
    <div class="row">
        <?php include 'filters.php' ?>

        <div class="col-sm-9">
            <?php foreach($houses as $house) :?>
                <a href="index.php?action=details&houseId=<?= $house['id'] ?>">
                    <div class="col-md-3 col-sm-4 house">
                        <figure>
                            <img src="<?= $house['picture'] ?>" alt="picture of the house"/>
                        </figure>
                        <figcaption class="text-center">
                            <h3 
                                <?php if($house['price'] < 1500000) echo "class=\"cheap\""?>
                            ><?= number_format($house['price'], 2) ?></h3>
                            <h4><?= $house['address'] ?></h4>
                            <h5><?= "{$house['city']}, {$house['state']} {$house['zip']}"?></h5>
                        </figcaption>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
<?php
include 'bottom.php';
?>