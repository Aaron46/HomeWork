<?php
    include 'utils/database.php';
    // include 'utils/db.php';
    $db = new Database("mysql:host=localhost;dbname=pcs", "root", null);
    $db->getPDOConnection();
    if (! empty($houseId)) {
        try {/*"LIMIT $offset, $rowsperpage" was added for proper pagination*/
            $query = "SELECT * FROM realEstate WHERE id = :id /*LIMIT ($offset, $rowsperpage)*/";
            $statement = $db->prepare($query);
            $statement->bindValue('id', $houseId);
            $statement->execute();
            $house = $statement->fetch(PDO::FETCH_ASSOC);
            if (empty($house)) {
                $error = "Unable to find house $houseId";
            }
        } catch(PDOException $e) {
            $error = "Something went wrong " . $e->getMessage();
        }
    } else {
        $error = "No house id set to find";
    }
?>