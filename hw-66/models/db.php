<?php
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $db = new PDO("mysql:host=localhost;dbname=pcs", "root", null, $options);
?>