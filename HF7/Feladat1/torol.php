<?php
require_once 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = " . $id;

    if (isset($conn)) {
        if ($conn->query($sql)) {
            header("Location: kiir.php");
        } 
    }
}

$conn->close();