<?php
include 'utils/database.php';
// include 'utils/db.php';
$db = new Database("mysql:host=localhost;dbname=pcs", "root", null,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
/*BEGIN PAGINATION CODE*/
    try {
            $query = "SELECT COUNT(*) FROM realEstate";
            //error running next line server thinks query is a method
            $statement = $db->db->getQuery($query);
            $r =$statement->fetchAll(PDO::FETCH_NUM);
            if(empty($r)){
                $errors = 'empty $r';
            }
            $numrows = $r[0];
            $numRows = $numrows[0];
            if (empty($numRows)) {
                $errors = "Unable to find $numRows";
            }
                $rowsperpage = 2;
                $totalPages = ceil($numRows / $rowsperpage);
            if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
            $currentpage = (int) $_GET['currentpage'];
                if ($currentpage > $totalPages) {
                $currentpage = $totalPages;
                }
                if ($currentpage < 1) {
                $currentpage = 1;
                } 
            } else {
            $currentpage = 1;
            } 
             
            
            $offset = ($currentpage - 1) * $rowsperpage;

        } catch(PDOException $e) {
            $error = "Something went wrong " . $e->getMessage();
           
        }
         /*END PAGINATION CODE*/
if (empty($zip)) {
    $zip = '';
}
if (empty($min)) {
    $min = '';
}
if (empty($max)) {
    $max = '';
}
try {
    $query = "SELECT * FROM realEstate  WHERE (:zip = '' OR zip=:zip)
                                    AND (:min = '' OR price >= :min)
                                    AND (:max = '' OR price <= :max) LIMIT $offset, $rowsperpage";
                                    //  LIMIT ($offset, $rowsperpage)"
    $statement = $db->prepare($query);
    $statement->bindValue('zip', $zip);
    $statement->bindValue('min', $min);
    $statement->bindValue('max', $max);
    $statement->execute();
    $houses = $statement->fetchAll();
    $statement->closeCursor();
} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}
?>