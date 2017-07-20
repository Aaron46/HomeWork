<?php
    if(isset($_POST["deleteSefer"])) {
        if(empty($_POST["deleteSefer"] || !is_numeric($_POST["deleteSefer"]))) {
            $error = "A valid sefer id must be submitted in Order to Delete";
        } else {
            $theId = $_POST['deleteSefer'];
        }
    }
    include '../models/seferDeleteModel.php';
            include '../views/seferDeleteView.php';
?>