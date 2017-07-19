<?php    
     function super_unique($students)
                    {
                        $result = array_map("unserialize", array_unique(array_map("serialize", $students)));

                        foreach ($result as $key => $value)
                        {
                            if ( is_array($value) )
                            {
                            $result[$key] = super_unique($value);
                            }
                        }
                        return $result;
                    }
                    
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO("mysql:host=localhost;dbname=pcs", "root", null, $options);
        $query = "SELECT name,grade FROM class";
        $results = $db->query($query);
        $students = $results->fetchAll(PDO::FETCH_ASSOC);
        $results->closeCursor();

        // if(isset($_POST["deleteStudent"])) {
        //     if(empty($_POST["deleteStudent"] || !is_numeric($_POST["deleteStudent"]))) {
        //         $error = "A valid students id must be submitted in Order to Delete";
        //     } else {
                
        //         $theId = $_POST['deleteStudent'];
        //         $query2 = "DELETE FROM class WHERE id = :theId";
        //         $statement2 = $db->prepare($query2);
        //         $statement2->bindValue('theId', $theId);
        //         $statement2->execute();
        //     }
        // }
        if(isset($_POST["deleteStudent"])) {
            if(empty($_POST["deleteStudent"] || !is_numeric($_POST["deleteStudent"]))) {
                $error = "A valid students name must be submitted in Order to Delete";
            } else {
                
                $thename = $_POST['deleteStudent'];
                $query2 = "DELETE FROM class WHERE name = :theName";
                $statement2 = $db->prepare($query2);
                $statement2->bindValue('theName', $thename);
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
    <title>QUIZ</title>

    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>PCS Class</h1>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <th>Name</th>
                <th>Grade</th>
            </thead>
            <tbody>
                <?php
                    // $students = array_map("unserialize", array_unique(array_map("serialize", $students)));
                    // $a = array_unique($students, SORT_REGULAR);
                   
                ?>
                
                <?php 
                    $stdents = super_unique($students);
                foreach($stdents as $student) :?>      
                    <tr> 
                         <td><?= $student["name"] ?></td>
                         <td><?= $student["grade"] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="row">
            <form class="form-horizontal"  method="post">
                <!-- using the 'id' to delete,which deletes only one id at a time 
                    <div class="form-group">
                    <label for="student" class=" col-sm-2 control-label">Delete A Student</label>
                    <div class="col-offset-sm-2 col-sm-10">
                    <select class="form-control" id="student" name="deleteStudent" >
                            <?php foreach($students as $student) :?>
                            <option value="<?= $student['id'] ?>"
                            <?php if (!empty($selectedStudent) && $student['id'] == $selectedStudent['id']) echo "selected" ?>
                            ><?= $student["name"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div> 
                using 'name' to delete, deletes both students' id's-->
                <div class="form-group">
                    <label for="student" class=" col-sm-2 control-label">Delete A Student</label>
                    <div class="col-offset-sm-2 col-sm-10">
                    <select class="form-control" id="student" name="deleteStudent" >
                            <?php foreach($students as $student) :?>
                            <option value="<?= $student['name'] ?>"
                            <?php if (!empty($selectedStudent) && $student['name'] == $selectedStudent['name']) echo "selected" ?>
                            ><?= $student["name"] ?></option>
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
        <?php if(!empty($error)) : ?>
            <h2 class="text-center alert alert-danger">
                <?= $error ?>
            </h2>
        <?php endif ?>
    </div>
</body>

</html>
