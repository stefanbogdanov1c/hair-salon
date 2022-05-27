<?php require_once "db.php" ?>

<?php 

    if(isset($_POST['frizer_id'])){
        $frizer_id = $_POST['frizer_id'];
        $ime_musterije = $_POST['ime_musterije'];
        $termin = $_POST['termin'];

        $potvrdjeno = "false";

        $q="INSERT INTO `rezervacija`(`frizer_id`, `ime_musterije`, `termin`, `potvrdjeno`) VALUES (? ,?, ?, ?)";
        $stmt = $pdo->prepare($q);
        $stmt -> execute([$frizer_id, $ime_musterije, $termin, $potvrdjeno]);

        session_start();
        if (isset($_SESSION['user'])){
            header("Location: admin.php");
            die();
        }else{
            header("Location: index.php");
            die();
        }
        
    }
    
?>

<?php include "modules/head.php"?>
<?php include "modules/mainnav.php"?>


<div class="container">
    <form action="rezervisi.php" method="post">
        <p>
            <input type="radio" name="frizer_id" id = "frizer_id" value = "1"> Suzana
            <input type="radio" name="frizer_id" id = "frizer_id" value = "2"> Ruzica
        </p>
        <p>
            <input type="text" name="ime_musterije" id = "ime_musterije"> Ime musterije
        </p>
        <p>
            <input type="date" name="termin" id = "termin"> Vreme termina 
        </p>
        <p>
            <input type="submit" value="Rezervisite!">
        </p>
</form>
</div>

<?php include "modules/foot.php"?>