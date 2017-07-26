<?php 
    include 'db.php';
if(empty($errors)) {
    try {
        if(isset($name)) {
            $query = "INSERT INTO seforim(name,category,price) VALUES(:name,:category; :price)";
            $statement = $db->prepare($query);
            $statement->bindValue('name', $name);
            $statement->bindValue('category', $category);
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