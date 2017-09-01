<?php
session_start(); 
    // if(!empty($_GET["carlist"])){
    //     $car = $_GET["carlist"];
    // }
    // else{
    //    break; 
    // }    
    // if(!empty($_GET['quantity'])){
    //     $quantity = $_GET['quantity'];
    // }else{
    //     $quantity = 1;
    // } 

    print_r($_GET);
    print_r($_SESSION);   
?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<title>My Big Shopping Cart</title>  
</head>
  <body>
    <div class="jumbotron">
        <h1>Hello, Customer!</h1>
    </div>
        <form action=""></form>
        <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Items</th>
                <th>Quantity</th>
                <th>Delete Item</th>
            </tr>
            <?php 
                foreach($_SESSION['cart'] as $key=>$value):?>
                   <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                        <td></td>
                    </tr> 
                <?php
                endforeach
                ?>
        </table>
        </div>   
  
        
                

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>