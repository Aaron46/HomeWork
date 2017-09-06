<?php 
    session_start();
    
    // if(empty($_SESSION['cart'])) {
    //     $_SESSION['cart'] = [];
    // }
    if(isset($_GET["Username"]) && isset($_GET["Password"])){
        $Username = $_GET["Username"];
        $Password = $_GET["Password"];
       
        $host = 'localhost';
        $database= 'pcs';
        $user = 'root';
        $pass = null;
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        try{
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass = null, $options);
            $query = "SELECT * FROM logins WHERE username = :Username";
            $statement = $db->prepare($query);
            $statement->bindValue('Username',$Username);
            $statement->execute();
            $logDbInfo = $statement->fetch(PDO::FETCH_COLUMN || PDO::FETCH_ASSOC);
            foreach($logDbInfo as $key=>$value){
                if($key = 'password'){
                    if(password_verify($Password,$value)){
                        echo "Success!";
                    };
                    
                }
            }
            print_r($logDbInfo);
            echo'<br>';

            
        }
        catch(PDOException $e){
            die("Something's wrong" .$e->getMessage());
        } 
        // password_verify($Password,$hash);  
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-offset-md-1 col-md-10">
                <form>
                    <div class="form-group">
                        <label for="userName">Username</label>
                        <input type="text" class="form-control" id="userName" aria-describedby="userName" placeholder="Create Username" name="Username">
                        <!-- <small id="userName" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="Password">
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>