<?php
include("nav.php");
$email="";
$erremail="";
$password="";
$errpaa="";
$errauth="";
if(isset($_POST["email"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    if(empty($email))
    {
        $erremail="l'email est obligatoire";
    }
    if(empty($password))
    {
        $errpaa="le password est obligatoire";
    }
    if($erremail==""&&$errpaa=="")
    {
       
            require("db.php");
            $query="select * from client where email=:email and password=:password";
            $stmt=$conn->prepare($query);   
            $stmt->execute(array(":email"=>$email,":password"=>$password));
            $data=$stmt->fetchall();
            if(count($data)==0)
            {
                $errauth="erreur d'authentification";
            }
            else
            {
                $_SESSION["id"]=$data[0]["id"];
                $_SESSION["nom"]=$data[0]["nom"]; 
                header("location:client.php");
            }

        
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
                <h1>Connexion</h1>
                
                <label><b>email:</b></label>
                <input type="email" placeholder="entrer l'email" name="email" required >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        
                <input type="submit" id='submit' value="envoyer">
              
            </form>
        </div>

        <footer class="d-flex justify-content-center align-items-center  mt-   ">
        <p>copyright 2022</p>
    </footer>

</body>
</html>




