<?php
include("nav.php");
    $nom="";
    $prenom="";
    $cin="";
    $tel="";
    $errnom="";
    $errprenom="";
    $errcin="";
    $errtel="";
    $errpas="";
    $pass="";
    $errniv="";
    $niveau="";
    $errdip="";
    $dip="";
    $erremail="";
    $email="";
    $errspe="";
    $specialite="";
    if(isset($_POST["nom"]))
    {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $cin=$_POST["cin"];
        $tel=$_POST["tel"];
        $email=$_POST["email"];
        $niveau=$_POST["niv"];
        $dip=$_POST["diplome"];
        $specialite=$_POST["specialite"];
        $pass=$_POST["password"];
        if(empty($nom))
        {
            $errnom="le nom est obligatoire";
        }
        if(empty($prenom))
        {
            $errprenom="le prenom est obligatoire";
        }
        if(empty($cin))
        {
            $errcin="le cin est obligatoire";
        }
        if(empty($tel))
        {
            $errtel="le telephone est obligatoire";
        }
        if(empty($email))
        {
            $erremail="l'email est obligatoire";
        }
        if(empty($niveau))
        {
            $errniv="le niveau est obligatoire";
        }
        if(empty($dip))
        {
            $errdip="le diplome est obligatoire";
        }
        if(empty($specialite))
        {
            $errspe="la specialite est obligatoire";
        }
        if(empty($pass))
        {
            $errpas="le password est obligatoire";
        }
        if($errnom==""&&$errprenom==""&&$errcin==""&&$errtel==""&&$errdip==""&&$erremail==""&&$errpas==""&&$errniv==""&&$errspe=="")
        {
            require("db.php");
            $query="insert into employe value(NULL,:nom,:prenom,:cin,:email,:telephone,:niveau,:diplome,:specialite,:password)";
            $stmt=$conn->prepare($query);
            $stmt->execute(array(":nom"=>$nom,":prenom"=>$prenom,":cin"=>$cin,":email"=>$email,":telephone"=>$tel,":niveau"=>$niveau,":diplome"=>$dip,":specialite"=>$specialite,":password"=>$pass));
            
            
            header("location:connecteremployee.php");
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
</head>
<body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="#" method="POST">
                <h1>inscription</h1>
                <label><b>Nom:</b></label>
                <input type="text" placeholder="Entrer le nom " name="nom" required>
                <label><b>prenom :</b></label>
                <input type="text" placeholder="Entrer le prenom" name="prenom" required>
                <label><b>CIN:</b></label>
                <input type="text" placeholder="Entrer le CIN " name="cin" required>
                <label><b>email:</b></label>
                <input type="email" placeholder="entrer l'email" name="email" required >
                <label><b>TELEPHONE:</b></label>
                <input type="tel" placeholder="entrer le telephone" name="tel" required>
                <br><br>
                <select name="niv" id="sel1" onchange="submit();">
                    <option value="">Selectionnez votre niveau d'etude:</option>
                    <option value="bac">bac </option>
                    <option value="bac+2">bac +2</option>
                    <option value="bac+3">bac +3</option>
                    <option value="bac+5">bac +5</option>
                </select> <br><br>
                <label><b>diplome:</b></label>
                <input type="text" placeholder="Entrer le diplome " name="diplome" required>
                <label><b>specialite:</b></label>
                <input type="text" placeholder="Entrer la specialite " name="specialite" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <input type="submit" id='submit' value="envoyer">
              
            </form>
        </div>
</body>
</html>