<?php
    session_start();
    if(!isset($_SESSION["id"]))
    {
        header("location:acceuil.html");
    }
    if(!isset($_GET["mod"]))
    {
        header("location:clinet.php");
    }
    include("nav.php");
    $date="";
    $errdate="";
    if(isset($_POST["date"]))
    {
       
        $date=$_POST["date"];
        if(empty($date))
        {
            $errdate="la date est obligatoire";
        }
        if($errdate=="")
        {
            $idpa=$_SESSION["id"];
            $idai=$_GET["mod"];
            require("db.php");
            $query="insert into reservation values(NULL,:idc,:date,:idr)";
            $stmt=$conn->prepare($query);
            $stmt->execute(array(":idc"=>$idpa,":date"=>$date,":idr"=>$idai));
            
           

           
           
   
   
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
            
            <form action="#" method="POST"  onsubmit=" return myFunction()">
                <h1>reservation:</h1>
                
                <label><b>la date du reservation :</b></label>
                <input type="date" placeholder="entrer l'email" name="date" required >

            

        
                <input type="submit" id='submit'  value="envoyer">
              
            </form>
        </div>



</body>
</html>



    <script>
            function myFunction() {
           
            confirm("reservation reussite!");
            window.location = "http://www.w3schools.com"; 
            return false;
                }
    </script>
    <a href="acceuil.html">se deconnecter</a>
  
</form>