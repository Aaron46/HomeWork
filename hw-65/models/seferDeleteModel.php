<?php
    try {
        include 'db.php';
        if(isset($theId)) {
                $query2 = "DELETE FROM seforim WHERE id = :theId";
                $statement2 = $db->prepare($query2);
                $statement2->bindValue('theId', $theId);
                $statement2->execute();
        }
        $query = "SELECT id, name FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll();
        $results->closeCursor();
         } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    };
?>






    