<?php
    try {
       include 'db.php';
       if(isset($theId)) {
                $query = "SELECT id, name, price FROM seforim WHERE id = :theId";
                if(isset($theCat)){
                  $query = $query." AND category = $theCat";
                }
                $statement = $db->prepare($query);
                $statement->bindValue('theId', $theId);
                $statement->execute();
                $selectedSefer = $statement->fetch();
                if(empty($selectedSefer)) {
                    $error = "Couldnt find sefer {$theId}";
                }
           }
        $query = "SELECT id, name,category FROM seforim";
        include 'controllers/FControl.php';
        $results = $db->prepare($query);
        if(!empty($_GET['category'])){
            $results->bindValue('category',$theCat);
        }
        $results->execute();
        $seforim =  $results->fetchAll();
        //$results->closeCursor();
        
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
}
?>