<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Frizerski salon Suzana</a>
      </li>
      <li class="nav-item">
        <?php if(!isset($_SESSION['user'])){?>
          <a class="nav-link" href="index.php">pocetna stranica</a>
        <?php }else{?>
          <a class="nav-link" href="admin.php">pocetna stranica</a>
        <?php } ?> 
      </li>
      <li class="nav-item">
        <?php if(!isset($_SESSION['user'])){?>
          <a class="nav-link" href="login.php">uloguj se</a>
        <?php }else{?>
          <a class="nav-link" href="logout.php">log out</a>
        <?php } ?> 
      </li>
      
    </ul>
  </div>
</nav>