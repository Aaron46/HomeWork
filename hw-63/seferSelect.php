<?php
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO("mysql:host=localhost;dbname=pcs", "root", null, $options);
        $query = "SELECT id, name FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();

        //   if(isset($_GET["newSefer"])) {
        //      if(empty($_GET["newSefer"] )) {
        //      } else {
                
        //         //$query1 = "INSERT INTO seforim(name,price) VALUES(:theNmame, :thePrice)";
        //         $query1 = "INSERT INTO seforim(name,price) VALUES(?, ?)";
        //         $statement1 = $db->prepare($query1);
        //         for($i = 0;$i < count($_GET["newSefer"];$i++))
        //         $statement1->bindValue("1", $sefern[0]);
        //         $statement1->bindValue("2", $sefern[1]);
        //         $statement1->execute();
        //      }
        //  }
        if(isset($_GET["newName"]) && isset($_GET["newPrice"])) {
            if(empty($_GET["newName"]) || empty($_GET["newPrice"])) {
                $error = "Valid sefer information must be submitted";
            } else {
                
               $query1 = "INSERT INTO seforim(name,price) VALUES(:theName, :thePrice)";
               $statement1 = $db->prepare($query1);
               $statement1->bindValue("theName", $_GET["newName"]);
               $statement1->bindValue("thePrice", $_GET["newPrice"]);
               $statement1->execute();

            }
        }
        if(isset($_GET["sefer"])) {
            if(empty($_GET["sefer"] || !is_numeric($_GET["sefer"]))) {
                $error = "A valid sefer id must be submitted";
            } else {
                $theId = $_GET['sefer'];
                $query = "SELECT id, name, price FROM seforim WHERE id = :theId";
                $statement = $db->prepare($query);
                $statement->bindValue('theId', $theId);
                $statement->execute();
                $selectedSefer = $statement->fetch();
                if(empty($selectedSefer)) {
                    $error = "Couldnt find sefer {$theId}";
                }
            }
        }
        if(isset($_GET["deleteSefer"])) {
            if(empty($_GET["deleteSefer"] || !is_numeric($_GET["deleteSefer"]))) {
                $error = "A valid sefer id must be submitted in Order to Delete";
            } else {
                $theId = $_GET['deleteSefer'];
                $query2 = "DELETE FROM seforim WHERE id = :theId";
                $statement2 = $db->prepare($query2);
                $statement2->bindValue('theId', $theId);
                $statement2->execute();
            }
        }
         
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .css{
            padding:3em;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>PCS Seforim Center</h1>
        </div>
    </div>
    <div class="container">
        <div class="row css">
            <!-- <form class="form-inline">
                <div class="form-group col-md-6 text-center">
                    <label for="newName">Name</label>
                    <input type="text" class="form-control" id="newName" name="newSefer[]" placeholder="Name of Sefer">
                </div>
                <div class="form-group col-md-6 text-center">
                    <label for="newPrice">Price $</label>
                    <input type="number" step=".01" class="form-control" id="newPrice" name="newSefer[]" placeholder="Enter Price">
                </div>
                <button type="submit" class="btn btn-default col-md-offset-5 col-md-2 col-md-offset-5 text-center">Add</button>
            </form>  -->
             <form class="form-inline">
                <div class="form-group col-md-6 text-center">
                    <label for="newName">Name</label>
                    <input type="text" class="form-control" id="newName" name="newName" placeholder="Name of Sefer">
                </div>
                <div class="form-group col-md-6 text-center">
                    <label for="newPrice">Price $</label>
                    <input type="number" step=".01" class="form-control" id="newPrice" name="newPrice" placeholder="Enter Price">
                </div>
                <button type="submit" class="btn btn-default col-md-offset-5 col-md-2 col-md-offset-5 text-center">Add</button>
            </form> 
        </div>
        <div class="row">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="sefer" class="col-sm-2 control-label">Select A Sefer</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="sefer" name="sefer">
                            <?php foreach($seforim as $sefer) :?>
                            <option value="<?= $sefer['id'] ?>"
                            <?php if (!empty($selectedSefer) && $sefer['id'] == $selectedSefer['id']) echo "selected" ?>
                            ><?= $sefer["name"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Get Info</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="sefer" class="col-sm-2 control-label">Delete A Sefer</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="sefer" name="deleteSefer">
                            <?php foreach($seforim as $sefer) :?>
                            <option value="<?= $sefer['id'] ?>"
                            <?php if (!empty($selectedSefer) && $sefer['id'] == $selectedSefer['id']) echo "selected" ?>
                            ><?= $sefer["name"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </form>
        </div>
        <?php if(!empty($selectedSefer)) : ?>
            <h2 class="text-center">
                <?= $selectedSefer['name'] ?> is $<?= number_format($selectedSefer['price'], 2) ?>
            </h2>
        <?php endif ?>

        <?php if(!empty($error)) : ?>
            <h2 class="text-center alert alert-danger">
                <?= $error ?>
            </h2>
        <?php endif ?>
    </div>
</body>

</html>