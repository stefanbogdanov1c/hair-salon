<?php require_once "db.php"?>

<?php
    $id = $_REQUEST['id'];
    $q = "DELETE FROM `rezervacija` WHERE `id` = ? ";
    $stmt = $pdo->prepare($q);
    $stmt->execute([$id]);


    header("location: admin.php");
    die();
?>