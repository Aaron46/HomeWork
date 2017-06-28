<?php
   if(isset($_POST['name'])){
        $name = $_POST['name'];
   }
   else{
       exit('Please enter a Name');
   }
   if(isset($_POST['email'])){
         $email = $_POST['email'];
   }
    else{
        exit('Please enter an email address');
    }   
   if(isset($_POST['age']) && $_POST['age'] > 0 && $_POST['age'] < 121)
   {
   $age =  $_POST['age'];
   }
       else{
        exit('Please enter a value greater than 0, less than 120');
    }
    if(isset( $_POST['rating']) &&  $_POST['rating'] > 0 &&  $_POST['rating'] < 11)
    {
    $rating = $_POST['rating'];
    }
       else{
        exit('Please enter a value greater than 0, no greater than 10');
    }
  
   
   

   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <style>
       .well:first-of-type{
           background-color:transparent;
           border:none;
       }
   </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Rate Us!</h1>
        </div>
        <div class="well col-sm-2 text-right">Name</div>
            <div class="col-sm-10 well "><?=$name ?></div>
       
        <div class="well col-sm-2 text-right">Email</div>
            <div class="col-sm-10 well "><?=$email ?></div>
        
        <div class="well col-sm-2 text-right">Age</div>
            <div class="col-sm-10 well "><?= $age ?></div>
       
        <div class="well col-sm-2 text-right">Rating</div>
            <div class="col-sm-10 well "><?=$rating ?></div>
        
    </div>
      
</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>