<?php require_once "db.php"?>
<?php  
    session_start();
    if (isset($_SESSION['user'])){
        $q = "SELECT * FROM `rezervacija` INNER JOIN `frizer` on rezervacija.frizer_id = frizer.idd WHERE potvrdjeno=false;";
        $stmt=$pdo->query($q);
        $rezervacija = $stmt->fetchAll();

        $qr = "SELECT * FROM `rezervacija` INNER JOIN `frizer` on rezervacija.frizer_id = frizer.idd WHERE potvrdjeno=true;";
        $stmt=$pdo->query($qr);
        $potvrdjene = $stmt->fetchAll();
?>

<?php include "modules/head.php"?>
<?php include "modules/mainnav.php"?>

<div class="container">
    <h1>nepotvrdjene!</h1>
    <table class="table">
        <thead>
            <th>Frizer</th>
            <th>Ime klijenta</th>
            <th>termin</th>
            <th>potvrdi</th>
            <th>obrisi</th>
        </thead>
        <tbody>
            <?php foreach($rezervacija as $r){?>
            <tr>
                <td><?=$r['ime']?></td>
                <td><?=$r['ime_musterije']?></td>
                <td><?=$r['termin']?></td>
                <td><a href="potvrdi.php?id=<?=$r['id']?>">Potvrdi</a></td>
                <td><a href="obrisi.php?id=<?=$r['id']?>">obrisi</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <h1>potvrdjene!</h1>
    <table class="table">
        <thead>
            <th>Frizer</th>
            <th>Ime klijenta</th>
            <th>termin</th>
        </thead>
        <tbody>
            <?php foreach($potvrdjene as $r){?>
            <tr>
                <td><?=$r['ime']?></td>
                <td><?=$r['ime_musterije']?></td>
                <td><?=$r['termin']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="rezervisi.php" class="btn btn-secondary">Rezervisite sada!</a>
</div>

<?php include "modules/foot.php"?>

<?php
    }else{
        http_response_code(403);
        die();
    }
   ?>

