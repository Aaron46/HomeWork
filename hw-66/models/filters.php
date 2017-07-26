<?php 
    try {
       include 'models/db.php';
        $query = "SELECT DISTINCT category FROM seforim   ";
        $results = $db->query($query);
        $category = $results->fetchAll(PDO::FETCH_COLUMN);
        $results->closeCursor();
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
}
?>