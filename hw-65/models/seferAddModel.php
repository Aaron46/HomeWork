<?php 
    include 'db.php';
if(empty($errors)) {
    try {
        if(isset($name)) {
            $query = "INSERT INTO seforim(name, price) VALUES(:name, :price)";
            $statement = $db->prepare($query);
            $statement->bindValue('name', $name);
            $statement->bindValue('price', $price);
            if(!$statement->execute() || $statement->rowCount() < 1) {
                $error = "Something went wrong, sefer not inserted";
            }
        }
    } catch (PDOException $e) {
        $error = "Something went wrong " . $e->getMessage();
    }
}
    //}
    
?>