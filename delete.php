<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `produits` where id=$id";
        $conn->query($sql);
    }
    header('location:/projet A /index.php');
    exit;
?>