<?php
    if(!empty($_GET['category']) && !empty($query)){
             $query = $query." WHERE category = :category";
             $theCat = $_GET['category'];
        }
    ?>