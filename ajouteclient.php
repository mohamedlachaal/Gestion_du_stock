<?php

include("nav.php");
    $nom="";
    $prenom="";
    $tel="";
    $errnom="";
    $errprenom="";
    $errtel="";
    $errpas="";
    $pass="";
    $erremail="";
    $email="";
    if(isset($_POST["nom"]))
    {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
     
        $tel=$_POST["tel"];
        $email=$_POST["email"];
        $pass=$_POST["password"];
        if(empty($nom))
        {
            $errnom="le nom est obligatoire";
        }
        if(empty($prenom))
        {
            $errprenom="le prenom est obligatoire";
        }
   
        if(empty($tel))
        {
            $errtel="le telephone est obligatoire";
        }
        if(empty($email))
        {
            $erremail="l'email est obligatoire";
        }
        if(empty($pass))
        {
            $errpas="le password est obligatoire";
        }
        if($errnom==""&&$errprenom==""&&$errcin==""&&$errtel==""&&$erremail==""&&$errpas=="")
        {
     

            /*echo $pwd;
            die();*/
            require("db.php");
            $query="insert into client value(:nom,:prenom,:email,:telephone,:password,NULL)";
            $stmt=$conn->prepare($query);
            $stmt->execute(array(":nom"=>$nom,":prenom"=>$prenom,":email"=>$email,":telephone"=>$tel,":password"=>$pass));
            
            
            header("location:connecterclient.php");
        }
    }


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css" media="screen" type="text/css" />
</head>
<body>
<div id="container">
            <!-- zone de connexion -->
            
            <form action="#" method="POST">
                <h1>Connexion</h1>
                <label><b>Nom:</b></label>
                <input type="text" placeholder="Entrer le nom " name="nom" required>
                <label><b>prenom :</b></label>
                <input type="text" placeholder="Entrer le prenom" name="prenom" required>
                <label><b>email:</b></label>
                <input type="email" placeholder="entrer l'email" name="email" required >
                <label><b>TELEPHONE:</b></label>
                <input type="tel" placeholder="entrer le telephone" name="tel" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <input type="submit" id='submit' value="envoyer">
              
            </form>
        </div>
        <footer class="d-flex justify-content-center align-items-center  mt-  ">
    <p>copyright 2022</p>
</footer>
</body>
</html>

