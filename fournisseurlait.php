<?php
include("nav.php");
if(!isset($_SESSION["id"])){
 
    header("location:connecterfournisseur.php");

}
else
{
    ?>
 <br><br><br><br><br><br>
<div class="container">
  <div class="card" style="width:500px">
    <img class="card-img-top" src="lait.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">entrepot du lait </h4>
      <p class="card-text">un depot qui est localiser a lazaret oujda,colaimo</p>
      <h5  class="card-title">temperature:</h5>
      <p class="card-text">8°c</p>
      <h5  class="card-title">le manque du produit:</h5>
      <p class="card-text">100 caisses du lait</p>
      <a href="acceptation.php?mod=$id" class="btn btn-primary">accepter</a>
    </div>
  </div>
 


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
    


<footer class="d-flex justify-content-center align-items-center  mt-   ">
        <p>copyright 2022</p>
    </footer>

</body>
</html>