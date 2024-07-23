<?php

require '../config/connect.php';

function getAllProducts()
{
    $db = connectToDatabase();
    $sql = "SELECT * FROM table_product";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
