<?php
    try {
       include 'db.php';
        $query = "SELECT id, name FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();
        if(isset($theId)) {
                $query = "SELECT id, name, price FROM seforim WHERE id = :theId";
                $statement = $db->prepare($query);
                $statement->bindValue('theId', $theId);
                $statement->execute();
                $selectedSefer = $statement->fetch();
                if(empty($selectedSefer)) {
                    $error = "Couldnt find sefer {$theId}";
                }
           }
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
}
?>