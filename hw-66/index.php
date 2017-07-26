<?php 
    $action = "home";
 if(!empty($_GET['action'])) {
     $action = $_GET['action'];
 }
switch ($action) {
    case "home":
        include 'models/filters.php';
        include "controllers/SSControl.php";
        break;/*exit*/
    case "add":
        include "controllers/SAControl.php";
        break;/*exit*/
    case "delete":
        include "controllers/SDControl.php";
        break;/*exit*/
    default:
         include "controllers/SSControl.php";
}
?>