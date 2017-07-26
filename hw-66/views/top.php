
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCS Seforim Store</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        <?php 
            if(!empty($style)){
                echo $style;  
        }?>
        /* body {
             padding-top: 70px;
              } */
    
    </style>
</head>

<body>
    <!-- <nav class="navbar navbar-default navbar-inverse navbar-top-fixed"> -->
    <nav class="navbar navbar-inverse navbar-top-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">PCS</a>
                <ul class="nav navbar-nav">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="index.php?action=add">Add</a></li>
                    <li><a href="index.php?action=delete">Delete</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>PCS Seforim Center</h1>
        </div>
    </div>
    <div class="container">