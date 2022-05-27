<?php require_once "db.php"?>

<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location:admin.php');
        die();

    }
    $poruka = "prijavite se";
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q = "SELECT * FROM user WHERE username = ? and `password` = ?";
        $stmt = $pdo->prepare($q);
        $stmt->execute([$username, $password]);
        $user = $stmt->fetch();

        if ($user){
            session_start();
            $_SESSION['user']=$user;
            header("location: admin.php");
        }
        else{
            $poruka = "greska";
        }
    }
    

?>

<?php include "modules/head.php"?>
<?php include "modules/mainnav.php"?>

<div class="container">
    <form action="login.php" method="post"  style="margin:100px">
        <?php if($poruka); echo($poruka)?>
        <p >
            <input type="text" name="username">Username
        </p>
        <p>
            <input type="text" name="password">Password
        </p>
        <p style="margin-bottom:100px">
            <input type="submit" value="Ulogujte se!">
        </p>
    
    </form>
</div>

<?php include "modules/foot.php"?>