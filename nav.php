<?php
session_start();
if(!isset($_SESSION["id"]))
{
?>
     <nav class="navbar navbar-expand-md bg-noir navbar-dark fixed-top w-100 align-items-stretch position-fixed p-0">
        <!-- Brand -->
        <img src="Capture.PNG" />
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse d-flex align-items-stretch" id="collapsibleNavbar">
          <ul class="navbar-nav flex-grow-1 d-flex align-items-stretch">
            <li class="nav-item flex-grow-1 d-flex justify-content-center align-items-center">
              <a class="nav-link" href="acceuil.html">Home</a>
            </li>
            <li class="nav-item flex-grow-1 d-flex justify-content-center align-items-center">
              <a class="nav-link" href="informations.html">Qui sommes-nous</a>
            </li>
            
            <li class="nav-item dropdown flex-grow-1 d-flex justify-content-center align-items-center">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    inscription
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="ajouteclient.php">client</a>
                  <a class="dropdown-item" href="ajouterfournisseur.php">fournisseur</a>
                  <a class="dropdown-item" href="ajouteremployee.php">employee</a>
                </div>
              </li>
            <li class="nav-item dropdown flex-grow-1 d-flex justify-content-center align-items-center">
                
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    se connecter
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="connecterclient.php">client</a>
                    <a class="dropdown-item" href="connecterfournisseur.php">fournisseur</a>
                    <a class="dropdown-item" href="connecteremployee.php">employee</a>
                  </div>
              </li>
          </ul>
        </div>
      </nav>
  <br>
  <?php

}
else
{
    ?>
       <nav class="navbar navbar-expand-md bg-noir navbar-dark fixed-top w-100 align-items-stretch position-fixed p-0">
        <!-- Brand -->
        <img src="Capture.PNG" />
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse d-flex align-items-stretch" id="collapsibleNavbar">
          <ul class="navbar-nav flex-grow-1 d-flex align-items-stretch">
            <li class="nav-item flex-grow-1 d-flex justify-content-center align-items-center">
              <a class="nav-link" href="acceuil.html">Home</a>
            </li>
            <li class="nav-item flex-grow-1 d-flex justify-content-center align-items-center">
              <a class="nav-link" href="informations.html">Qui sommes-nous</a>
            </li>
      <li class="nav-item flex-grow-1 d-flex justify-content-center align-items-center">
        <a class="nav-link" href="logout.php">se deconnecter</a>
      </li>
    </ul>
  </nav>
<?php
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    




</body>
</html>