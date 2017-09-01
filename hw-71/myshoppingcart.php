<?php
    class Cart {
        public function __construct() {
            session_start();
            
            if(empty($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
        }

        public function addItem($item, $quantity) {
            if(!empty($_SESSION['cart'][$item])) {
                $quantity += $_SESSION['cart'][$item];
            }
            $_SESSION['cart'][$item] = $quantity;
        }

        public function getItems() {
            return $_SESSION['cart'];
        }
    }

    $cart = new Cart();
    
    if(!empty($_GET['carlist']) && !empty($_GET['quantity'])){
        $cart->addItem($_GET['carlist'],$_GET['quantity']);
        header('Location: myCart.php');
    }
    print_r($cart->getItems());
    echo "<br>";
    
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
    <h1>Hello, world!</h1>
         <select name="carlist" form="carform">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
        <form action="" id="carform">
            <input type="number" name="quantity">
            <input type="submit">
        </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>