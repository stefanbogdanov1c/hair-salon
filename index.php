<?php require_once "db.php"?>
<?php

    $q = "SELECT * FROM `rezervacija` INNER JOIN `frizer` on rezervacija.frizer_id = frizer.idd WHERE potvrdjeno=true;";
    $stmt=$pdo->query($q);
    $rezervacija = $stmt->fetchAll();

?>
<?php include "modules/head.php"?>
<?php include "modules/mainnav.php"?>

<div class="container">
    <table class="table">
        <thead>
            <th>Frizer</th>
            <th>Ime klijenta</th>
            <th>termin</th>
        </thead>
        <tbody>
            <?php foreach($rezervacija as $r){?>
            <tr>
                <td><?=$r['ime']?></td>
                <td><?=$r['ime_musterije']?></td>
                <td><?=$r['termin']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="rezervisi.php" class="btn btn-secondary" style="margin-bottom: 100px">Rezervisite sada!</a>
</div>

<?php include "modules/foot.php"?>