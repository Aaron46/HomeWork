<?php
    $name = "";
    $years = "";
    $favorite  = ["java","Mysql","python","C++"] ;
    if($_SERVER['REQUEST_METHOD'] === "POST"){ 
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
        else{
            $errors[] = 'Name Is required!';
        }
        if(isset($_POST['years'])){
            if(is_numeric($_POST['years']) && $_POST['years'] <= 50 && $_POST['years'] > 0){
                    $years = $_POST['years'];
            }
        }
        else{
            $errors[] = 'Years Must be Atleast 1, Not Exceeding 50!';
        }
    if(isset($_POST['fav'])){
            $favorite[] = $_POST['fav'];
        }
        else{
            $errors[] = 'Favorite Is required!';
        }
    }
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Programmer's Form</h1>
        </div>
         <div class="container">
          <?php if(!empty($errors)) {?>
              <div class="alert alert-danger">
                  <ul>
                  <?php foreach($errors as $error) echo "<li>$error</li>" ?>
                  </ul>
               </div>
          <?php } ?>
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                <input type="name" class="form-control" id="name"  name="name" placeholder="Name" value="<?=$name?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="years" class="col-sm-2 control-label">Years On The Job</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="years"  name="years" placeholder="Years On The Job" value="<?=$years?>" required>
                </div>
            </div>
            
            <div class="form-group">
                  <div class="col-sm-offset-1 col-sm-10">
                      <select class="form-control" name="fav" multiple required>
                          <?php foreach($favorite as $fav) : ?>
                          <option value="<?=  $fav ?>"><?=$fav?> </option>
                          <?php endforeach ?>
                      </select>
                  </div>
              </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
             <?php if($_SERVER['REQUEST_METHOD'] === "POST") :?>
                <div class="alert alert-danger">
                    <h2>Thank you for submitting your form!</h2>
                </div>
            <?php endif ?>
        </form>
    </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>