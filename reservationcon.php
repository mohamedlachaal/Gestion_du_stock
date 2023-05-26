<?php
    session_start();
    if(!isset($_SESSION["id"]))
    {
        header("location:acceuil.html");
    }
    if(!isset($_GET["mod"]))
    {
        header("location:employee.php");
    }
    include("nav.php");
    $date="";
    $errdate="";
    $datef="";
    $errdatef="";
    if(isset($_POST["date"]))
    {
       
        $date=$_POST["date"];
        $datef=$_POST["datef"];
        if(empty($date))
        {
            $errdate="la date est obligatoire";
        }
        if(empty($datef))
        {
            $errdatef="la date est obligatoire";
        }
        if($errdate==""&&$errdatef=="")
        {
            $idpa=$_SESSION["id"];
            $idai=$_GET["mod"];
            require("db.php");
            $query="insert into reservationcon values(NULL,:ide,:date,:datef,:idr)";
            $stmt=$conn->prepare($query);
            $stmt->execute(array(":ide"=>$idpa,":date"=>$date,":datef"=>$datef,":idr"=>$idai));
            
           

           
           
   
   
        }
    }
      
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<div id="container">
            <!-- zone de connexion -->
            
            <form action="#" method="POST">
                <h1>conge:</h1>
                
                <label><b>la date de debut conge :</b></label><br>
                <input type="date" placeholder="entrer l'email" name="date" required >
                <br><label><b>la date du fin conge :</b></label><br>
                <input type="date" placeholder="entrer l'email" name="datef" required >

            

        
                <input type="submit" id='submit'  onclick="myFunction()" value="envoyer">
              
            </form>
        </div>



</body>
</html>



    <script>
            function myFunction() {
           
            confirm("reservation reussite!");
            window.location.replace("http://www.w3schools.com"); 
                }
    </script>
    <a href="acceuil.html">se deconnecter</a>
  
</form>