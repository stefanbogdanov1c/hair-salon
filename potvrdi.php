<?php require_once "db.php"?>

<?php
    $id = $_REQUEST['id'];
    $q = "UPDATE `rezervacija` SET `potvrdjeno` = true WHERE `id` = ?";
    $stmt = $pdo->prepare($q);
    $stmt->execute([$id]);


    header("location: admin.php");
    die();
?>