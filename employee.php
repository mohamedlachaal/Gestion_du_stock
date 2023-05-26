<?php
include("nav.php");
if(!isset($_SESSION["id"])){
 
    header("location:connecteremployee.php");

}

else
{
   
    ?>
        <br><br><br><div class="container  ">
            <br><br><div class=" row d-flex justify-content-center align-items-stretch w-100">
    
                <div class="card col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 " >
                    <h2> demande de conge:</h2>
                    <img src="lettre.jpg" alt="premiere activite">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi ipsum quisquam voluptate neque laborum labore, nobis at suscipit quidem architecto beatae accusantium vitae sapiente repellendus ut esse molestias aperiam porro.</p>
                    <a href="reservationcon.php?mod=$id" class="btn btn-primary">demander</a>
                </div>
                <div class="card col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                    <h2>demande de demissions</h2>
                    <img src="demi.jpg" alt=" deuxime activite">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nemo accusantium dignissimos laudantium quis error eius esse facere obcaecati, laboriosam aliquid, hic eum quo ab beatae voluptatibus unde, odit ipsam.</p>
                    <a href="reservationdemi.php?mod=$id" class="btn btn-primary">demander</a>
                </div>
                <div class="card col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                   
                    <h2>bulletins de paie: </h2>
                    <img src="bul.webp" alt="derniere activite">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem tempora magni id itaque expedita cum sed ex, totam exercitationem natus, consequuntur fugiat qui ullam minus nam voluptate, dignissimos blanditiis. Reprehenderit.</p>
                    <a href="reservationbul.php?mod=$id" class="btn btn-primary">demander</a>
                </div>
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
    

</body>
<html>