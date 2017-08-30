<?php
    function getTd($value, $houseId) {
        $it = "<td><a href=\"index.php?action=details&houseId=$houseId\">$value</a></td>";
        return $it;
    }
     // if not on page 1, don't show back links
            if ($currentpage > 1) {
            // show << link to go back to page 1
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
            // get previous page num
            $prevpage = $currentpage - 1;
            // show < link to go back to 1 page
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
            } // end if

            // range of num links to show
            $range = 1;
            // loop to show links to range of pages around current page
            for ($x = ($currentpage - $range); $x < (($currentpage + $range)  + 1); $x++) {
            // if it's a valid page number...
            if (($x > 0) && ($x <= $totalPages)) {
                // if we're on current page...
                if ($x == $currentpage) {
                    // 'highlight' it but don't make a link
                    echo " [<b>$x</b>] ";
                // if not current page...
                } else {
                    // make it a link
                    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
                } // end else
            } // end if 
            } // end for
    $styles = "
        .house img {
            width: 131.24px;
            height: 98px;
        }
    ";
    include 'top.php';
?>
    <div class="row">
        <?php include 'filters.php' ?>

        <div class="col-sm-9">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Price</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($houses as $house) :?>
                    <tr class="house">
                        <?= getTd(number_format($house['price'], 2), $house['id']) ?>
                        <?= getTd($house['address'], $house['id']) ?>
                        <?= getTd($house['city'], $house['id']) ?>
                        <?= getTd($house['state'], $house['id']) ?>
                        <?= getTd($house['zip'], $house['id']) ?>
                        <td><a href="houseDetailsController.php?houseId={$house['id']}"><img src= "<?= $house['picture'] ?>" alt="the house"/></a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
include 'bottom.php';
?>